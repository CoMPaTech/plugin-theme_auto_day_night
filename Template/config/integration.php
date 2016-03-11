<script src="<?= $this->url->dir() ?>plugins/Theme_auto_day_night/spectrum.js"></script>
<link rel='stylesheet' href='<?= $this->url->dir() ?>plugins/Theme_auto_day_night/spectrum.css' />

<h3><img src="<?= $this->url->dir() ?>plugins/Theme_auto_day_night/day-and-night.png"/>&nbsp;Automatic day & night theme</h3>
<div class="listing">
    <?= $this->form->label(t('Start of night-time (in 24h based hours)'), 'theme_auto_day_night_nighttime') ?>
    <?= $this->form->text('theme_auto_day_night_nighttime', $values) ?>

    <?= $this->form->label(t('Start of day-time (in 24h based hours)'), 'theme_auto_day_night_daytime') ?>
    <?= $this->form->text('theme_auto_day_night_daytime', $values) ?>

    <?= $this->form->label(t('Color of main background'), 'theme_auto_day_night_main_background') ?>
    <?= $this->form->text('theme_auto_day_night_main_background', $values) ?>

    <?= $this->form->label(t('Color of alternate background'), 'theme_auto_day_night_alternate_background') ?>
    <?= $this->form->text('theme_auto_day_night_alternate_background', $values) ?>

    <?= $this->form->label(t('Color of folded columns and background'), 'theme_auto_day_night_folded_background') ?>
    <?= $this->form->text('theme_auto_day_night_folded_background', $values) ?>

    <?= $this->form->label(t('Color of regular text highlighting'), 'theme_auto_day_night_text_color') ?>
    <?= $this->form->text('theme_auto_day_night_text_color', $values) ?>

    <?= $this->form->label(t('Color of selected text highlighting'), 'theme_auto_day_night_selected_text_color') ?>
    <?= $this->form->text('theme_auto_day_night_selected_text_color', $values) ?>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</div>

<script src="<?= $this->url->dir() ?>plugins/Theme_auto_day_night/day_night.js"></script>
