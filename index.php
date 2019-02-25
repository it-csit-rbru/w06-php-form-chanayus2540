<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ระบบการเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sect1">
        <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
        <label for="fname">ชื่อ</label><input type="text" name="fname">
        <label for="lname">นามสกุล</label><input type="text" name="lname">
        <label for="faculty">คณะ</label>
        <select name="faculty">
            <option value="คณะวิทยาการคอมพิวเตอร์">คณะวิทยาการคอมพิวเตอร์</option>
            <option value="ครุศาสตร์">ครุศาสตร์</option>
        </select><br><br>
        <label for="program">สาขาวิชา</label>
        <select name="program">
            <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
            <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
            <option value="เทคโนโลยีเครือข่ายคอมพิวเตอร์">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
            <option value="ภูมิสารสนเทศ">ภูมิสารสนเทศ</option>
            <option value="คอมพิวเตอร์ศึกษา">คอมพิวเตอร์ศึกษา</option>
        </select><br><br>
        <label for="std_year" >ชั้นปี</label>
        <input type="radio" name="std_year" value="1"><label>ปี 1</label>
        <input type="radio" name="std_year" value="2"><label>ปี 2</label>
        <input type="radio" name="std_year" value="3"><label>ปี 3</label>
        <input type="radio" name="std_year" value="4"><label>ปี 4</label>
        <input type="radio" name="std_year" value="5"><label>ปี 5</label><br>
        </fieldset>
        </fieldset id="sect1">
        <fieldset id="sect1">
        <legend>ส่วนที่ 2 ข้อมูลโครงงาน</legend><br>
        <label for="prj_name_th">ชื่อโครงงาน(ภาษาไทย)</label><input type="textarea" name="prj_name_th"><br><br>
        <label for="prj_name_en">ชื่อโครงงาน(ภาษาอังกฤษ)</label><input type="textarea" name="prj_name_en"><br><br>
        <label for="prj_type">ประเภทโครงงาน</label>
        <select name="prj_type">
            <option value="เกม">เกม</option>
            <option value="โปรแกรมเดสก์ทอป">โปรแกรมเดสก์ทอป</option>
            <option value="โปรแกรมมือถือ">โปรแกรมมือถือ</option>
        </select><br><br>
        <label for="prj_tool">เครื่องมือที่ใช้ในการพัฒนา</label>
        <input type="checkbox" name="prj_tool[]" value="HTML"><label>HTML</label>
        <input type="checkbox" name="prj_tool[]" value="CSS"><label>CSS</label>
        <input type="checkbox" name="prj_tool[]" value="JavaScript"><label>JavaScript</label>
        <input type="checkbox" name="prj_tool[]" value="Bootstcipt"><label>Bootstcipt</label>
        <input type="checkbox" name="prj_tool[]" value="Material design"><label>Material design</label>
        <input type="checkbox" name="prj_tool[]" value="Angular"><label>Angular</label><br>
        <input type="checkbox" name="prj_tool[]" value="react"><label>react</label>
        <input type="checkbox" name="prj_tool[]" value="PHP"><label>PHP</label>
        <input type="checkbox" name="prj_tool[]" value="MySQL"><label>MySQL</label>
        <input type="checkbox" name="prj_tool[]" value="Chartjs"><label>Chartjs</label><br><br>
        <label for="prj_advisor">อาจารย์ที่ปรึกษา</label>
        <select name="prj_advisor">
        <option value="ผศ.บุญเรือน พฤกษ์ศศิธร">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
        <option value="ผศ.ทิพย์วรรณ ฟูเฟื่อง">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
        </select>
        </fieldset>
        <input type="submit" value="go...">
    </form>
</body>
</html>