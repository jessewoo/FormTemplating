<!DOCTYPE html>
<html lang="en">

<? include 'includes/meta.php'; ?>
<body>

<? include 'includes/navbar.php'; ?>

<div class="container" id="main_content">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <a id="editDataButton" class="btn btn-default btn-sm pull-right" href="#">Edit data</a>
            <h4>Successful Insert of Data</h4>
            <div id="responsecontainer" class="well well-sm">

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <? include 'includes/side.php'; ?>
        </div>

    </div>
</div><!-- /.container -->

<!-- FOOTER -->
<? include 'includes/footer.php'; ?>
<? include 'includes/javascript.php'; ?>
<script src="/js/summary.js"></script>

</body>
</html>