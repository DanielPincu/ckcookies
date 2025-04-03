<form method="get" id="category-filter-form">
    <select name="product_cat" id="product_cat" onchange="this.form.submit()">
        <option value="">Vælg kategori</option>
        <?php
        // Get the IDs of the categories to exclude
        $exclude_categories = array(
            get_term_by('slug', 'uncategorized', 'product_cat')->term_id, // "Uncategorized"
            get_term_by('slug', 'anbefalet', 'product_cat')->term_id,   // "Anbefalet"
            get_term_by('slug', 'udvalgt', 'product_cat')->term_id,     // "Udvalgt"
        );

        // Get all product categories excluding the specified ones
        $terms = get_terms(array(
            'taxonomy'   => 'product_cat',
            'orderby'    => 'name',
            'hide_empty' => false,
            'exclude'    => $exclude_categories, // Exclude these categories
        ));

        // Display the categories in the dropdown
        foreach ($terms as $term) {
            // Check if category is selected
            $selected = (isset($_GET['product_cat']) && $_GET['product_cat'] == $term->slug) ? 'selected' : '';
            echo '<option value="' . esc_attr($term->slug) . '" ' . $selected . '>' . esc_html($term->name) . '</option>';
        }
        ?>
    </select>
</form>
