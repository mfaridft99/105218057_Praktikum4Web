<?php
        abstract class karyawan{
            public $no;
            public $name;
            public $birth;
            public $gender;
            public $level;
            public $status;
            public $paybill;

            abstract public function getno();
            abstract public function setno($no);
            abstract public function getname();
            abstract public function setname($name);
            abstract public function getbirth();
            abstract public function setbirth($birth);
            abstract public function getgender();
            abstract public function setgender($gender);
            abstract public function getlevel();
            abstract public function setlevel($level);
        }
        class fulltime extends karyawan{
            public $status ="Fulltime";

            public function getno(){
                return $this->$no;
            }
            public function setno($no){
                $this->no=$no;
            }
            public function getname(){
                return $this->$name;
            }
            public function setname($name){
                $this->name=$name;
            }
            public function getbirth(){
                return $this->$birth;
            }
            public function setbirth($birth){
                $this->birth=$birth;
            }
            public function getgender(){
                return $this->$gender;
            }
            public function setgender($gender){
                $this->gender=$gender;
            }
            public function getlevel(){
                return $this->$level;
            }
            public function setlevel($level){
                $this->level=$level;
            }
            function __construct($no, $name, $birth, $gender, $level){
                $this->no=$no;
                $this->name=$name;
                $this->birth=$birth;
                $this->gender=$gender;
                $this->level=$level;

                if ($this->level=="Senior"){
                    $this->paybill=5000000;
                }elseif ($this->level=="Amateur"){
                    $this->paybill=3500000;
                }elseif ($this->level=="Junior"){
                    $this->paybill=2000000;
                }
            }
        }
        class parttime extends karyawan{
            public $status ="Parttime";

            public function getno(){
                return $this->$no;
            }
            public function setno($no){
                $this->no=$no;
            }
            public function getname(){
                return $this->$name;
            }
            public function setname($name){
                $this->name=$name;
            }
            public function getbirth(){
                return $this->$birth;
            }
            public function setbirth($birth){
                $this->birth=$birth;
            }
            public function getgender(){
                return $this->$gender;
            }
            public function setgender($gender){
                $this->gender=$gender;
            }
            public function getlevel(){
                return $this->$level;
            }
            public function setlevel($level){
                $this->level=$level;
            }
            function __construct($no, $name, $birth, $gender, $level){
                $this->no=$no;
                $this->name=$name;
                $this->birth=$birth;
                $this->gender=$gender;
                $this->level=$level;

                if ($this->level=="Senior"){
                    $this->paybill=5000000/2;
                }elseif ($this->level=="Amateur"){
                    $this->paybill=3500000/2;
                }elseif ($this->level=="Junior"){
                    $this->paybill=2000000/2;
                }
            }
        }
        $array = array();
        $array[0] = $karyawan1 = new parttime(1, "Jajang Nurseha", "Garut, 25 Oktober 2000", "Laki-Laki", "Senior");
        $array[1] = $karyawan2 = new fulltime(2, "Jujun Junaedi", "Tasikmalaya, 10 November 1998", "Laki-Laki", "Amateur");
        $array[2] = $karyawan3 = new parttime(3, "Oom Murtadin", "Sukabumi, 25 September 2001", "Laki-Laki", "Junior");
        $array[3] = $karyawan4 = new fulltime(4, "Sundary Jahannam", "Bandung, 17 Oktober 1999", "Perempuan", "Senior");
        $array[4] = $karyawan5 = new fulltime(5, "Rony Makrony", "Sumedang, 17 Agustus 1997", "Laki-Laki", "Junior");
        $array[5] = $karyawan6 = new parttime(6, "Sarah Sanjaya", "Bandung, 25 Januari 2001", "Perempuan", "Amateur");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar Pegawai PT. Halimun Jaya Wetan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 2px solid #808080;
                text-align: center;
            }
            body{
                background-color:#afeeee;
                font-family: 'Nunito', sans-serif;
            }
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>
    </head>
    <body>
    <h1 style= "text-align:center;color:">Daftar Pegawai PT. Halimun Jaya Wetan</h1>
        <table>
            <thead style="background-color:#f0fff0">
                <th>No.</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Level Karyawan</th>
                <th>Status</th>
                <th>Gaji Karyawan</th>
            </thead>
            <tbody style="background-color:#f5fffa">
                <?php for($i=0;$i<6;$i++){ ?>
                    <tr>
                        <td><?php echo $array[$i]->no;?></td>
                        <td><?php echo $array[$i]->name;?></td>
                        <td><?php echo $array[$i]->birth;?></td>
                        <td><?php echo $array[$i]->gender;?></td>
                        <td><?php echo $array[$i]->level;?></td>
                        <td><?php echo $array[$i]->status;?></td>
                        <td><?php echo $array[$i]->paybill;?></td>
                        <?php } ?>     
                    </tr>   
            <tbody>
        </table>
    </body>
<html>
