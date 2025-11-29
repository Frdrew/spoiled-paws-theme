<?php
if (!defined('ABSPATH')) exit;

function spco_render_form_shortcode() {
    ob_start();
    $fields = spco_get_fields();
    ?>

    <form method="post" class="spco-form">

        <?php wp_nonce_field('spco_submit', 'spco_nonce'); ?>

        <?php foreach ($fields as $key => $field): ?>
            <div class="spco-field">
                <label><?php echo $field['label']; ?></label>

                <?php if ($field['type'] === 'text'): ?>
                    <input type="text" name="<?php echo $key; ?>" required="<?php echo $field['required']; ?>">
                <?php endif; ?>

                <?php if ($field['type'] === 'number'): ?>
                    <input type="number" name="<?php echo $key; ?>" step="0.1" required="<?php echo $field['required']; ?>">
                <?php endif; ?>

                <?php if ($field['type'] === 'textarea'): ?>
                    <textarea name="<?php echo $key; ?>"></textarea>
                <?php endif; ?>

                <?php if ($field['type'] === 'select'): ?>
                    <select name="<?php echo $key; ?>" required="<?php echo $field['required']; ?>">
                        <?php foreach ($field['options'] as $val => $label): ?>
                            <option value="<?php echo $val; ?>"><?php echo $label; ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>

        <button type="submit" class="spco-submit">Submit Custom Order</button>
    </form>

    <?php

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['spco_nonce'])) {
        if (!wp_verify_nonce($_POST['spco_nonce'], 'spco_submit')) {
            echo "<p>Error: Invalid form.</p>";
            return ob_get_clean();
        }

        $order_id = spco_create_order($_POST);

        if ($order_id) {
            echo "<p>Thank you! Your custom order has been received.</p>";
        }
    }

    return ob_get_clean();
}

function spco_create_order($data) {
    // Create Woo order
    $order = wc_create_order();

    // Add a single custom-product line item
    $order->add_product(wc_get_product(0), 1); // Placeholder 0 product, replace later if needed

    foreach (spco_get_fields() as $key => $field) {
        $order->add_order_note($field['label'] . ': ' . sanitize_text_field($data[$key]));
    }

    $order->update_status('custom-pending');

    wc()->mailer()->get_emails()['WC_Email_New_Order']->trigger($order->get_id());

    return $order->get_id();
}
