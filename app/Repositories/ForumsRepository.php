<?php
namespace App\Repositories;

use App\Jobs\SendMailJob;
use App\Models\Faq;
use App\Models\Forum;
use App\Models\ForumComment;
use App\Models\ForumSubscription;
use App\Models\ForumTag;
use Illuminate\Http\Request;

class ForumsRepository extends SharedRepo{

    public function get(Request $request,$approved=1){

        $rows_count = ($request->rows)?$request->rows:20;
        $forums = Forum::with([ 'user','tags', 'comments'])->orderBy('created_at','desc');
        //'user'

        if($request->term){
            $forums->where('forum_title','like','%'.$request->term.'%');
            $forums->orWhere('forum_description','like','%'.$request->term.'%');
        }

        if($request->tag){
            $tagged_forums = ForumTag::where('tag',$request->tag)->get()->pluck('forum_id');
            $forums->whereIn('id',$tagged_forums);
        }

        if($approved !== 3)
        $forums->where('status',$approved);

         //Access levels effect to query results
         //$this->access_filter($forums);

        $results =  $forums->paginate($rows_count);

        return $results;
    }

    public function save(Request $request){

        $forum = new Forum();
        $forum->forum_title = $request->title;
        $forum->forum_description = $request->description;
        $forum->created_by = current_user()->id;
        $forum->status = 0;

        if($request->hasFile('image')):

            $file           = $request->file('image');  
            $file_name   = md5_file($file->getRealPath());
            $extension   = $file->guessExtension();
            $file_path   = $file_name.'.'.$extension;
           
            $file->move(storage_path().'/app/public/uploads/forums/',$file_path);
            $forum->forum_image     = $file_path;

        endif;

        $forum->save();
        
        @$this->join_forum($forum);

        return $forum;
    }

    public function  save_comment(Request $request){

        $comment = new ForumComment();

        $comment->created_by = current_user()->id;
        $comment->forum_id = $request->id;
        $comment->comment = $request->comment;
        $comment->save();

        return $comment;
    }



    public function find($id){

        return Forum::find($id);
    }

    public function delete($id){
        return Forum::find($id)->delete();
    }

    public function count(){
        return count(Forum::all());
    }

    public function approve($id){

        $forum = Forum::find($id);
        $forum->status =1;
        $forum->update();

        $alert = array(
            'title' => "Forum Post $forum->title Approved",
            'body'=>'We are happy to inform you that your forum post has been approved and is live now',
            'email'=>$forum->user->email
        );

        SendMailJob::dispatch( $alert);

        return $forum;
    }

    public function reject($id){

        $forum = Forum::find($id);
        $forum->status =2;
        $forum->update();

        $alert = array(
            'title' => "Forum Post $forum->title Rejected",
            'body'=>'We are sorry to inform you that your forum post has been rejected',
            'email'=>$forum->user->email
        );

        SendMailJob::dispatch( $alert);

        return $forum;
    }

    public function getJoinedForums(Request $request){
     
    if(@current_user()->id):
        return ForumSubscription::where('user_id', current_user()->id)->get()->pluck('forum_id')->toArray();
    else:
        return [];
     endif;

    }

    public function join_forum($request){

        $joining = ForumSubscription::create([
            'user_id'=>current_user()->id,
            'forum_id'=>$request->id
        ]);

        $joining->save();

    }




}
