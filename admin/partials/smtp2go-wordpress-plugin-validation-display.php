<div class="wrap smtp2go">
<h1>Sender Domain Validation for <?php echo $this_host ?></h1>

<?php if (!empty($result->domains)) : ?>

<?php foreach ($result->domains as $domain) : ?>

<pre><?php echo print_r($domain, 1); ?></pre>

<?php endforeach; ?>

<?php else : ?>

<div class="error">Unable to retrieve domain validation information. <strong><?php echo $result->error ?? '' ?></strong></div>
<?php endif ?>

</div>