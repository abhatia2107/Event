<?php
class Details extends Eloquent
{
		protected $table="create_event";
		protected $primaryKey = 'event_id';

		 public static $rules = [
			'event_title'=>'required',
			'location'=>'required',
			//'event_date'=>'required',
			//'event_time'=>'required',
			'description'=>'required',
			'org_name'=>'required',
			'org_des'=>'required',
			//'file'=>'required',


	];
	protected $fillable = ['usertable_id','event_title','location','date','time','event_logo','description','org_name','org_des','event_website','event_facebook'];
	public function getmaxeventid()
	{
		return DB::table('create_event')->max('event_id');
	}
	public function getalldetails()
	{
		return DB::select('select * from create_event where usertable_id=?',array(1));
	}
	public function getediteventdetails($id)
	{
		return DB::select('select * from create_event where event_id=?',array($id));
	}
	public function updateeventdetails($id)
	{
		return DB::update('update create_event set name = ?,mobno = ?,roomid = ? where userid= ?', array($name,$mobno,$roomid,$userid));
	}
}