<!DOCTYPE html>
<html lang="es">
    <head>
        <?PHP $this -> load -> view(THEME.'head') ?>
    </head>
    <body>
        <!-- START TOPBAR -->
        <?PHP $this -> load -> view(THEME.'topbar') ?>
        <!-- END TOPBAR -->
        <div class="ch-container">
            <div class="row">
                <?PHP $this -> load -> view(THEME.'left_menu') ?>
                <!-- content  -->
                <div id="content" class="col-lg-10 col-sm-10">
                </div>
                <!-- end content -->
                
            </div>
        </div>
    </body>
</html>