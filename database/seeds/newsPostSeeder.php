<?php

use Illuminate\Database\Seeder;
use Sunra\PhpSimple\HtmlDomParser;


class newsPostSeeder extends Seeder
{
    protected $html;


    protected $totalOfData = 100 ;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $lastNum = $this->getNewNum();
//
//        for ($i = $lastNum, $j = $this->totalOfData; $i > $lastNum - $j; $i--) {
//
//            $result = $this->getLastNews($i);
//
//            if ($result) {
//
//                DB::table('officialnews')->insert([
//                    'sid' => $result['sid'],
//                    'title' => $result['title'],
//                    'content' => $result['content'],
//                    'dep' => $result['dep'],
//                    'data' =>  $result['date'],
//                    'file1'=> $result['files']['file1_path'],
//                    'file2'=> $result['files']['file2_path'],
//                    'file3'=> $result['files']['file3_path']
//                ]);
//            }
//        }
    }

    public function getNewNum()
    {

        $html = HtmlDomParser::file_get_html('https://rdrc.mnd.gov.tw/rdrc/news/RecNews.aspx');

        $url = $html->find('.txt_ash01', 0)->children(0)->href;

        return substr($url, -4);

    }

    public function getLastNews($sid)
    {

        $html = HtmlDomParser::file_get_html('https://rdrc.mnd.gov.tw/rdrc/news/RecNews_detail.aspx?sid=' . $sid);
        $title = $html->find('#ctl00_cphMain_lblTitle', 0)->plaintext;

        if (trim($title, ' ')) {
            $content = $html->find('#ctl00_cphMain_lblBody', 0)->plaintext;
            $unit = $html->find('#ctl00_cphMain_lblArmyType', 0)->plaintext;
            $time = $html->find('#ctl00_cphMain_lblCreateDate', 0)->plaintext;
            $file1 = $html->find('#ctl00_cphMain_hypFile1', 0)->plaintext;
            $file1_path = $html->find('#ctl00_cphMain_hypFile1', 0)->href;
            $file2 = $html->find('#ctl00_cphMain_hypFile2', 0)->plaintext;
            $file2_path = $html->find('#ctl00_cphMain_hypFile2', 0)->href;
            $file3 = $html->find('#ctl00_cphMain_hypFile3', 0)->plaintext;
            $file3_path = $html->find('#ctl00_cphMain_hypFile3', 0)->href;

            $files = [
                'file1' => $file1,
                'file1_path' => substr($file1_path, 3, strlen($file1_path)),
                'file2' => $file2,
                'file2_path' => substr($file2_path, 3, strlen($file2_path)),
                'file3' => $file3,
                'file3_path' => substr($file3_path, 3, strlen($file3_path))
            ];

            $news = [
                'sid' => $sid,
                'title' => trim($title, ' '),
                'content' => trim($content, ' '),
                'dep' => trim($unit, ' '),
                'date' => trim($time, ' '),
                'files' => $files,
            ];

            return $news;
        } else {

            return [];
        }

    }


}
