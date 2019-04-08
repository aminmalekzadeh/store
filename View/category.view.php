<?php
require_once '../function.php';
require_once '../section/head.php';
require_once '../section/header.php';
require_once '../section/content.php';
require '../controller/categoryController.php';
?>
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <section id="basic-form-layouts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-success">
                                        <h4 class="card-title" id="basic-layout-form">اضافه نمودن
                                            دسته بندی</h4>
                                    </div>
                                    <p class="mb-0">اضافه نمودن دسته و زیردسته</p>
                                </div>

                                <div class="card-body">
                                    <div class="px-3">
                                        <form action="../category.php" method="post" class="form">
                                            <div class="form-body">
                                                <h4 class="form-section">
                                                    <i class="icon-layers"></i> افزودن </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">نام</label>
                                                            <input type="text" id="projectinput1"
                                                                   class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">انتخاب</label>
                                                            <select id="projectinput5" name="parent"
                                                                    class="form-control">
                                                                <option value="0">دسته اصلی</option>
                                                                <?php
                                                                require_once '../config.php';
                                                                $cat = new Category();
                                                                $categories = $cat->getCategory();

                                                                foreach ($categories as $row) {
                                                                    ?>

                                                                    <option value="<?php echo $row['ID']; ?>">

                                                                        <?php echo $row['NAME']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="icon-note"></i> ذخیره
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                require_once '../section/footer.php';
                ?>
