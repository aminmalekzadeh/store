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
                                    $categories = $cat->getcategory_mainitem();
                                    foreach ($categories as $row) {
                                        ?>
                                        <tr id="row-tb">
                                            <td class="text-truncate"><?php echo $row['ID']; ?></td>

                                            <td class="text-truncate"><?php echo $row['NAME']; ?></td>
                                            <td>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <a id="delete"
                                                           class="btn btn-sm btn-outline-danger round mb-0"
                                                           href="../delete.php?id=<?php
                                                           echo $row['ID']; ?>" type="submit">حذف
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-sm btn-outline-success round mb-0"
                                                                type="button" data-toggle="modal"
                                                                data-target="#default">افزودن ویژگی
                                                        </button>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <button id="<?php echo $row['ID']; ?>"  class="btn btn-sm btn-outline-primary round mb-0"
                                                                type="button" data-toggle="modal"
                                                                data-target="#default" onclick="myFunction(this.id)">ویرایش
                                                        </button>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                    <script>
                                        $('#recent-orders tbody').on('click', '#delete', function () {
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
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">ویرایش اطلاعات</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row match-height">
                    <div class="col-md-10">

                    </div>
                    <div class="card-body">
                        <div class="card-block">

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tabX1" data-toggle="tab"
                                       aria-controls="tab1" href="#tab1" aria-expanded="true">
                                        ویرایش
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tabX2" data-toggle="tab"
                                       aria-controls="tab2" href="#tab2" aria-expanded="false">
                                        ویژگی ها
                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab1"
                                     aria-expanded="true" aria-labelledby="base-tabX1">
                                    <section id="basic-form-layouts">
                                        <div class="row">
                                            <div class="col-md-10">

                                                <div class="card-body">
                                                    <div class="px-3">
                                                        <form action="../update.php" method="post"
                                                              class="form">
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">
                                                                        ویرایش نام</label>
                                                                    <input type="text"
                                                                           id="projectinput1"
                                                                           class="form-control"
                                                                           name="name" required>


                                                                    <br/>
                                                                    <script>

                                                                        function myFunction(clicked_id) {
                                                                            alert(clicked_id);
                                                                        }
                                                                        $(function () {
                                                                            $(' input #id').val(this.id);
                                                                        });
                                                                    </script>
                                                                    <input type="hidden" id="id" name="id" value="">
                                                                    <input  type="submit" value=" ذخیره تغییرات" class="btn btn-outline-primary">

                                                                </div>
                                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tabX2">
                                    <div class="col-md-10">
                                        <div class="card-block pt-3">
                                            <h6 class="text-bold-500">ایجاد ویژگی</h6>
                                            <form class="taskboard-app-input row">
                                                <fieldset
                                                        class="form-group position-relative has-icon-left col-md-4 col-12 mb-1">
                                                    <div class="form-control-position">
                                                        <i class="icon-emoticon-smile"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           id="todoTitle" placeholder="عنوان">
                                                    <div class="form-control-position control-position-right">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset
                                                        class="form-group position-relative has-icon-left col-md-6 col-12 mb-1">
                                                    <div class="form-control-position">
                                                        <i class="icon-emoticon-smile"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           id="todoMessage" placeholder="پیام">
                                                    <div class="form-control-position control-position-right">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>

                                                <fieldset
                                                        class="form-group position-relative has-icon-left col-md-2 col-12 mb-1">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="fa fa-paper-plane-o hidden-lg-up"></i>
                                                        ایجاد
                                                    </button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn grey btn-outline-secondary"
                                    data-dismiss="modal">بستن
                            </button>



                        </div>
                    </div>
                </div>
            </div>
            <?php require_once '../section/footer.php'; ?>
