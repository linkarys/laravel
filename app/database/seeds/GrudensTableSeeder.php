<?php

class GrudensTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('grudens')->truncate();

		$grudens = array(
			array('user'=>'Xinju Liang', 'addr'=>'xinju - 麦兜-鱼丸粗面.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Ying Wang', 'addr'=>'ying - 大话西游.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Bo Yang', 'addr'=>'bo-大话西游之唐僧罗嗦经典对白.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'ChangCheng Mao', 'addr'=>'changcheng - You Shall Not Pass - The Lord of the Rings_clip.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Feng Guo', 'addr'=>'Feng.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'GuangQiang Cui', 'addr'=>'GQ-罗家英.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Jian Zhang', 'addr'=>'jian.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Jing Yang', 'addr'=>'Jing Yang.jpg', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Wenjie Zhang', 'addr'=>'wenjie-麦兜-我的志愿.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Yanan Zhuang', 'addr'=>'yanan-西游降魔.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'Tian Luan & Yang', 'addr'=>'luantian-yang 宠物小精灵-火箭队超经典开场白.mp4', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
			array('user'=>'?', 'addr'=>'经理 宋鹏 魏坤 姜小琛 孙云健 法嘉 赵腾腾', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')),
		);

		// Uncomment the below to run the seeder
		DB::table('grudens')->insert($grudens);
	}

}
