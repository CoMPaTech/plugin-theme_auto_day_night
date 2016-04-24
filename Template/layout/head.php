<?php


/*
 * Very quick & dirty example of how to have two CSS-styles on users time(zone) switching
 */

#use Kanboard\Model\Config;

/*
 * Get start/end times
 */
$night_starts=$this->app->config('theme_auto_day_night_nighttime');
$night_ends=$this->app->config('theme_auto_day_night_daytime');

// Compile possible timezones
$timezones=DateTimeZone::listIdentifiers();

// Get the current timezone
$timezone=$this->app->config('application_timezone');

/*
 * Only use a different theme if there is a timezone found
 * in other words, not on the login screen or if no timezone set (generally)
 * So login screen takes whatever the admin decides, user screens adopt to their profile timezone
 */
if (in_array($timezone,$timezones)) {

    // Get 'hour' in that timezone
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone($timezone));
    $hour= $date->format('H');


    // If between certain hours assume night-theme
    if ( $hour > $night_starts || $hour < $night_ends ) {




    /* DEFINE YOUR NIGHT THEME BELOW */

    $main_background=$this->app->config('theme_auto_day_night_main_background','#222');
    $alternate_background=$this->app->config('theme_auto_day_night_alternate_background','#444');
    $folded_background=$this->app->config('theme_auto_day_night_folded_background','#644');
    $text_color=$this->app->config('theme_auto_day_night_text_color','#dda');
    $selected_text_color=$this->app->config('theme_auto_day_night_selected_text','#aad');


    /* DEFINE YOUR NIGHT THEME ABOVE */

?>

<style>
    body {
	background: <?php echo $main_background; ?>;
	color: <?php echo $text_color; ?>;
    }
    .listing,
    textarea {
	background-color: <?php echo $main_background; ?>;
	color: <?php echo $selected_text_color; ?>;
    }
    div.ganttview-grid-row-cell,
    div.ganttview-vtheader,
    #chart,
    .alert,
    th,
    #popover-content {
	background: <?php echo $alternate_background; ?>;
    }
    .alert,
    .page-header h2 a,
    .sidebar li.active a {
        color:<?php echo $selected_text_color; ?>;
    }
    div.ganttview-vtheader-item,
    .activity-title,
    .dashboard-table-link,
    h1, h2, h3 {
	color: <?php echo $text_color; ?>;
    }
    div.ganttview-grid-row-cell.ganttview-weekend,
    .table-stripped tr:nth-child(odd),
    td.board-column-task-collapsed {
	background: <?php echo $folded_background; ?>;
    }
    .board-column-header-task-count,
    .views li {
	color: <?php echo $selected_text_color; ?>;
    }
    div.ganttview-vtheader-series-name a,
    th a,
    a {
	color: <?php echo $text_color; ?>;
    }
    select, input[type='number'], input[type='date'], input[type='email'], input[type='password'], input[type='text'] {
	background-color: <?php echo $alternate_background; ?>;
	color: <?php echo $text_color; ?>;
    }
    .textarea-dropdown li, .dropdown-submenu-open li {
	background-color: <?php echo $alternate_background; ?>;
	color: <?php echo $text_color; ?>;
    }
    ul.dropdown-submenu-open {
	background-color: <?php echo $alternate_background; ?>;
	color: <?php echo $text_color; ?>;
    }
    .textarea-dropdown a, .dropdown-submenu-open a {
	color: <?php echo $text_color; ?>;
    }
    .dropdown-menu-link-text, .dropdown-menu-link-icon {
	color: <?php echo $text_color; ?>;
    }
    .views li a {
	color: <?php echo $text_color; ?>;
    }
    .views li.active a {
	color: <?php echo $selected_text_color; ?>;
    }
</style>
<?php

    } else {

        /* DEFINE YOUR DAY THEME BELOW */

        $colors=["yellow","blue","green","purple","red","orange","grey","brown","deep_orange","dark_grey","pink","teal","cyan","lime","lime_green","amber"];

        $day_css="<style>
    	    .ui-sortable {
                background-color: rgb(236, 236, 236);
                padding: 3px 3px 0px 0px;
	    }";

        foreach ($colors as $color) {
            $day_css.=sprintf("div.color-%s {
	        border-left-width: 15px;
	        background-color: white;
	    }",$color);
        }

        $day_css.="</style>";

        echo $day_css;

        /* DEFINE YOUR DAY THEME ABOVE */

    }
}
?>
