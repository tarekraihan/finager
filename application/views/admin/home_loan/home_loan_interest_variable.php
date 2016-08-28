<div class="row">

    <section class="col col-6">
        <label class="label">Interest Rate Max(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateMax" value="<?php if(!empty($row["interest_rate_max"])){echo $row["interest_rate_max"];}else{echo set_value('txtInterestRateMax');} ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateMax');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Interest Rate Average(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php if(!empty($row["interest_rate_average"])){echo $row["interest_rate_average"];}else{echo set_value('txtInterestRateAverage');} ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateAverage');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Interest Rate Min(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateMin" value="<?php if(!empty($row["interest_rate_min"])){echo $row["interest_rate_min"];}else{echo set_value('txtInterestRateMin');} ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateMin');?></label>
    </section>

</div>