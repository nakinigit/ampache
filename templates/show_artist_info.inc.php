<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2015 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
?>

<div class="item_info">
    <?php if ($biography['id']) {
        Art::display('artist', $biography['id'], $artist->f_name, 2);
    } else { ?>
        <div class="item_art">
            <?php if ($biography && is_array($biography)) { ?>
                <a href="<?php echo $biography['megaphoto']; ?>" rel="prettyPhoto"><img src="<?php echo $biography['largephoto']; ?>" alt="<?php echo $artist->f_name; ?>" width="128"></a>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="item_properties">
        <?php
        if ($biography && is_array($biography)) {
            $dcol = array();
            if ($biography['placeformed']) {
                $dcol[] = $biography['placeformed'];
            }
            if ($biography['yearformed']) {
                $dcol[] = $biography['yearformed'];
            }
            if (count($dcol) > 0) {
                echo implode(', ', $dcol);
            }
        }
        ?>
    </div>
</div>
<div id="item_summary">
    <?php if ($biography && is_array($biography)) { ?>
        <?php echo $biography['summary']; ?>
    <?php }?>
</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
});
</script>
