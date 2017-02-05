<div class="wrap">
    <h2><?php echo $title ?></h2>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row">
                    <label for="example_string">Example String</label>
                </th>
                <td>
                    <input name="example_string" type="text" id="example-string" value="<?php echo $settings['example_string']; ?>" class="regular-text">
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="example_select">Select Example</label>
                </th>
                <td>
                    <select name="example_select">
						<?php foreach ( $example_select as $option => $int ): ?>
                            <option value="<?php echo $option; ?>" <?php echo ( $settings['example_select'] == $option ) ? 'selected="selected"' : ''; ?>><?php echo $option; ?></option>
						<?php endforeach; ?>
                    </select>
                </td>
            </tr>
            </tbody>
        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes">
        </p>

    </form>

    <!-- This content comes from our /App controller using Parsedown -->
    <div class="mp6-primary">
		<?php echo $markdown_content ?>
    </div>

    <!-- This content is coming from /config.php -->
    <p>
        <string> By:</string>
        <a href="<?php echo $config['url']; ?>"><?php echo $config['author']; ?></a>
        Version <?php echo $config['version']; ?>
    </p>

</div>