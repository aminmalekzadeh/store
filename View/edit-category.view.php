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
                <div class="col-12 col-md-8" id="recent-sales">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-primary">
                                <h4 class="card-title">دسته بندی ها
                                </h4>
                            </div>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                        </div>

                        <div class="card-content mt-1">
                            <div class="table-responsive">
                                <table class="table table-hover table-xl mb-0"
                                       id="recent-orders">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">ردیف</th>
                                        <th class="border-top-0">نام دسته بندی</th>
                                        <th class="border-top-0">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                                    <?php
                                    require_once '../config.php';
                                    $cat = new Category();
                                    $categories = $cat->getCategory();
                                    foreach ($categories as $row) {
                                        ?>
                                        <tr id="row-tb">
                                            <td class="text-truncate"><?php echo $row['ID']; ?></td>

                                            <td class="text-truncate"><?php echo $row['NAME']; ?></td>
                                            <td>
                                                <div  class="row">
                                                    <?php
                                                    delete_item($row['ID']);
                                                    ?>
                                                    <div class="col-md-2">
                                                        <button id="delete" class="btn btn-sm btn-outline-danger round mb-0"
                                                               formaction="../edit-category.php"  type="submit">حذف
                                                        </button>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-sm btn-outline-primary round mb-0"
                                                                type="button">ویرایش
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <script>
                                        $('#recent-orders tbody').on('click','#delete',function() {
                                            $(this).closest('tr').remove();
                                        })

                                    </script>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../section/footer.php'; ?>
