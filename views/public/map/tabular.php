<?php
queue_css_file('geolocation-items-map');

$title = __('Browse Items on the Map') . ' ' . __('(%s total)', $totalItems);
echo head(array('title' => $title, 'bodyclass' => 'map browse_tabular'));
?>

<h1><?php echo $title; ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<div id="geolocation-tabular">
    <table>
        <thead>
            <tr>
                <th scope="col"><?php echo __('Title'); ?></th>
                <th scope="col"><?php echo __('Longitude'); ?></th>
                <th scope="col"><?php echo __('Latitude'); ?></th>
                <th scope="col"><?php echo __('Address'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo link_to_item(null, array(), 'show', $item); ?></td>
                <td><?php echo $locations[$item->id]->longitude; ?></td>
                <td><?php echo $locations[$item->id]->latitude; ?></td>
                <td><?php echo $locations[$item->id]->address; ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>
        <a href="<?php echo absolute_url('items/map'); ?>"><?php echo __('View as a map'); ?></a>
    </p>
</div>
<?php echo foot();
