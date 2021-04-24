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
                        <input type="date" class="date" name="from_date" class="form-control" value="2010-04-05">
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
        <div class="col">
            <table class="table table-hover">
                <!-- this is where all the ajax responses output here -->
            </table>
        </div>
    </div>
</div>
