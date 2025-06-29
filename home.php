<?php
$title = "Registration Form";
ob_start();
?>

<div class="mb-3">
    <label for="studentId" class="form-label">អត្តសញ្ញាណនិស្យិត</label>
        <input type="text" class="form-control" id="studentId" placeholder="សូមបញ្ចូលអត្តសញ្ញាណនិស្យិត">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">ឈ្មោះ</label>
                <select class="form-select" id="name">
                        <option value="title">ជំហានថ្មី</option>
                            </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ឆ្នាំ/ឆមាស</label>
                                    <div class="form-check">
                                            <input class="form-check-input" type="radio" name="yearSemester" id="year" value="year">
                                                    <label class="form-check-label" for="year">Year</label>
                                                        </div>
                                                            <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="yearSemester" id="semester" value="semester">
                                                                            <label class="form-check-label" for="semester">Semester</label>
                                                                                </div>
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                    <label for="date" class="form-label">ថ្ងៃខែ</label>
                                                                                        <button type="button" class="btn btn-custom">ជ្រើស</button>
                                                                                            <input type="text" class="form-control" id="date" placeholder="ជ្រើសថ្ងៃខែឆ្នាំ">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <button type="button" class="btn btn-custom">បញ្ជូន</button>
                                                                                                    <p>គោលការណ៍សុវត្ថិភាព</p>
                                                                                                        <ol>
                                                                                                                <li>ឱ្យឆ្លើយតែ 100% នៃខ្លឹមាខារដែលបានផ្តល់ឱ្យ។</li>
                                                                                                                        <li>ឱ្យឆ្លើយតែ 100% នៃខ្លឹមាខារដែលបានផ្តល់ឱ្យ។</li>
                                                                                                                                <li>ឱ្យឆ្លើយតែ 100% នៃខ្លឹមាខារដែលបានផ្តល់ឱ្យ។</li>
                                                                                                                                        <li>ឱ្យឆ្លើយតែ 100% នៃខ្លឹមាខារដែលបានផ្តល់ឱ្យ។</li>
                                                                                                                                                <li>ឱ្យឆ្លើយតែ 100% នៃខ្លឹមាខារដែលបានផ្តល់ឱ្យ។</li>
                                                                                                                                                    </ol>
                                                                                                                                                        <p>គោលការណ៍សុវត្ថិភាពនៃការប្រើប្រាស់ទិន្នន័យ។ ទិន្នន័យដែលបានបញ្ជូននឹងត្រូវបានរក្សាទុកនៅក្នុងប្រព័ន្ធរយៈពេល 90% ។</p>
                                                                                                                                                            <p>Copyright ©2021 All rights reserved | IT Department!</p>
                                                                                                                                                            </div>

                                                                                                                                                            <?php
                                                                                                                                                            $content = ob_get_clean();
                                                                                                                                                            include 'header.php';
                                                                                                                                                            echo $content;
                                                                                                                                                            include 'footer.php';
                                                                                                                                                            ?>