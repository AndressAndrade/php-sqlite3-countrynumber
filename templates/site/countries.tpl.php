<div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="margin: 10px;">
    <!-- <button type="button" class="btn btn-secondary" id="valid">Valid</button>
    <button type="button" class="btn btn-secondary" id="not-valid">Not valid</button>
    <button type="button" class="btn btn-secondary" id="all" aria-selected="true">All</button> -->

    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Countries
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="/">All</a>
            <a class="dropdown-item" href="/countries/237">Cameroon</a>
            <a class="dropdown-item" href="/countries/251">Ethiopia</a>
            <a class="dropdown-item" href="/countries/212">Morocco</a>
            <a class="dropdown-item" href="/countries/258">Mozambique</a>
            <a class="dropdown-item" href="/countries/256">Uganda</a>
        </div>
    </div>
</div>
<form name="filter_state" method="POST" action="/teste.php">
    <div class="form-group row" style="margin: 10px;">
        <div class="form-group form-check col-auto" style="margin-top: 10px;">
            <input type="checkbox" class="form-check-input" id="onlyvalid" name="valid" value="1">
            <label class="form-check-label" for="onlyvalid">Valid</label>
        </div>
        <div class="form-group form-check col-auto" style="margin-top: 10px;">
            <input type="checkbox" class="form-check-input" id="onlynotvalid" name="notvalid" value="2">
            <label class="form-check-label" for="onlynotvalid">Not valid</label>
        </div>
        <div class="form-group form-check col-auto" style="margin-top: 10px;">
            <input type="checkbox" class="form-check-input" id="listall" name="listall" value="3">
            <label class="form-check-label" for="listall">All</label>
        </div>
        <button type="submit" name="filter" class="btn btn-secondary col-auto">Filter state</button>
    </div>
</form>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Number</th>
            <th>Country Code</th>
            <th>Country</th>
            <th>State</th>
        </tr>
    <tbody>
        <?php foreach ($data['phonesInfo'] as $phoneInfo) : ?>
            <?php $result = checkNumber($phoneInfo['phone']); ?>
            <tr>
                <td><?php echo $phoneInfo['phone']; ?></td>
                <td><?php echo $result->country_code; ?></td>
                <td><?php echo $result->country; ?></td>
                <td><?php echo $result->state ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </thead>
</table>