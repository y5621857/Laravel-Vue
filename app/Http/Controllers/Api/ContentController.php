<?php

namespace App\Http\Controllers\Api;

use App\Model\Lesson;
use App\Model\tag;
use App\Model\Video;
use Illuminate\Http\Request;
use DB;

class ContentController extends CommonController
{
    /**
     * TODO 获取标签列表
     * @return array
     */
    public function tags()
    {
        return $this->response(tag::get());
    }

    /**
     * TODO 获取课程列表
     * @param $tid
     * @return array
     */
    public function lesson($tid)
    {
        if ($tid) {
            $data = $users = DB::table('lessons')
                ->join('tag_lessons', 'lessons.id', '=', 'tag_lessons.lesson_id')
                ->where('tag_id', $tid)
                ->get();

        } else {
            $data = Lesson::get();
        }

        return $this->response($data);
    }

    /**
     * TODO 获取推荐课程
     * @param $row
     * @return array
     */
    public function commendLesson($row)
    {
        $data = Lesson::where('iscommend', 1)->limit($row)->get();

        return $this->response($data);
    }

    /**
     * TODO 获取热门课程
     * @param $row
     * @return array
     */
    public function hotLesson($row)
    {
        $data = Lesson::where('ishot', 1)->limit($row)->get();

        return $this->response($data);
    }

    /**
     * TODO 获取课程视频
     * @param $lessonId
     * @return array
     */
    public function videos($lessonId)
    {
        $data = Video::where('lesson_id', $lessonId)->get();

        return $this->response($data);
    }
}

