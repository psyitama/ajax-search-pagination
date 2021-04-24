<?php
//available results per page
$result_per_page = 5;
//determine number of total pages available
$number_of_pages = ceil($rows / $result_per_page);
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <form id="search" action="leads/search_client" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label  font-weight-bold text-danger">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="inputName">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <form id="date_range" action="leads/date_joined" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right font-weight-bold text-danger">From:</label>
                    <div class="col-md-4 sm-12">
                        <input type="date" class="date" name="from_date" class="form-control" value="2011-01-01">
                    </div>
                    <label class="col-sm-2 col-form-label text-right font-weight-bold text-danger">Date:</label>
                    <div class="col-md-4 sm-12">
                        <input type="date" class="date" name="to_date" class="form-control" value="<?=date("Y-m-d")?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3 ml-auto">
            <nav>
                <ul class="pagination">
                    <form id="pagination_pages">
                        <div class="form-group row">
                            <?php
for ($page = 1; $page <= $number_of_pages; $page++):
?>
                            <li class="page-item">
                                <input class="page_number page-link" type="submit" value="<?=$page?>">
                            </li>
                            <?php
endfor;
?>
                        </div>
                    </form>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- this form is responsible for changing page number -->
<form id="page" action="leads/pagination" method="POST">
    <input type="hidden" id="page_number" name="page_number" value="">
</form>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <!-- this is where all the ajax responses output here -->
            </table>
        </div>
    </div>
</div>
