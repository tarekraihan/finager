<div class="row">

    <section class="col col-6">
        <label class="label">Interest Rate Max(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateMax" value="<?php echo set_value('txtInterestRateMax'); ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateMax');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Interest Rate Average(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php echo set_value('txtInterestRateAverage'); ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateAverage');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Interest Rate Min(%)</label>
        <label class="input">
            <input type="text" maxlength="50" name="txtInterestRateMin" value="<?php echo set_value('txtInterestRateMin'); ?>" placeholder="Write Interest Rate without percentage sign">
        </label>
        <label class="red"><?php echo form_error('txtInterestRateMin');?></label>
    </section>

</div>