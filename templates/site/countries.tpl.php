<table class="table table-hover">
    <thead>
        <tr>
            <th>Number</th>
            <th>Country Code</th>
            <th>Country</th>
            <th>State</th>
        </tr>
        <tbody>
            <?php foreach ($data['phonesInfo'] as $phoneInfo): ?>
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