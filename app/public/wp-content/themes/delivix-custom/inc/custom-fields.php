<?php
/**
 * Custom Fields and Meta Boxes
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Meta Boxes
 */
function delivix_custom_add_meta_boxes() {
    // Portfolio Meta Box
    add_meta_box(
        'portfolio_details',
        __('Portfolio Details', 'delivix-custom'),
        'delivix_custom_portfolio_meta_box_callback',
        'portfolio',
        'normal',
        'high'
    );

    // Case Study Meta Box
    add_meta_box(
        'case_study_details',
        __('Case Study Details', 'delivix-custom'),
        'delivix_custom_case_study_meta_box_callback',
        'case_studies',
        'normal',
        'high'
    );

    // Team Member Meta Box
    add_meta_box(
        'team_member_details',
        __('Team Member Details', 'delivix-custom'),
        'delivix_custom_team_member_meta_box_callback',
        'team',
        'normal',
        'high'
    );

    // Testimonial Meta Box
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'delivix-custom'),
        'delivix_custom_testimonial_meta_box_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'delivix_custom_add_meta_boxes');

/**
 * Portfolio Meta Box Callback
 */
function delivix_custom_portfolio_meta_box_callback($post) {
    wp_nonce_field('delivix_custom_save_meta_box_data', 'delivix_custom_meta_box_nonce');

    $client_name = get_post_meta($post->ID, '_portfolio_client_name', true);
    $project_date = get_post_meta($post->ID, '_portfolio_project_date', true);
    $project_url = get_post_meta($post->ID, '_portfolio_project_url', true);
    $technologies = get_post_meta($post->ID, '_portfolio_technologies', true);
    $project_duration = get_post_meta($post->ID, '_portfolio_project_duration', true);
    $project_budget = get_post_meta($post->ID, '_portfolio_project_budget', true);
    $project_description = get_post_meta($post->ID, '_portfolio_project_description', true);
    $challenges = get_post_meta($post->ID, '_portfolio_challenges', true);
    $solutions = get_post_meta($post->ID, '_portfolio_solutions', true);
    $results = get_post_meta($post->ID, '_portfolio_results', true);

    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="portfolio_client_name"><?php _e('Client Name', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="portfolio_client_name" name="portfolio_client_name" value="<?php echo esc_attr($client_name); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_project_date"><?php _e('Project Date', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="date" id="portfolio_project_date" name="portfolio_project_date" value="<?php echo esc_attr($project_date); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_project_url"><?php _e('Project URL', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="portfolio_project_url" name="portfolio_project_url" value="<?php echo esc_url($project_url); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_technologies"><?php _e('Technologies Used', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="portfolio_technologies" name="portfolio_technologies" value="<?php echo esc_attr($technologies); ?>" class="regular-text" />
                <p class="description"><?php _e('Separate technologies with commas (e.g., WordPress, PHP, JavaScript)', 'delivix-custom'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_project_duration"><?php _e('Project Duration', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="portfolio_project_duration" name="portfolio_project_duration" value="<?php echo esc_attr($project_duration); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 3 months, 6 weeks', 'delivix-custom'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_project_budget"><?php _e('Project Budget', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="portfolio_project_budget" name="portfolio_project_budget" value="<?php echo esc_attr($project_budget); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., $10,000 - $15,000', 'delivix-custom'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_project_description"><?php _e('Project Description', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="portfolio_project_description" name="portfolio_project_description" rows="4" class="large-text"><?php echo esc_textarea($project_description); ?></textarea>
                <p class="description"><?php _e('Brief description of the project', 'delivix-custom'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_challenges"><?php _e('Challenges Faced', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="portfolio_challenges" name="portfolio_challenges" rows="3" class="large-text"><?php echo esc_textarea($challenges); ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_solutions"><?php _e('Solutions Implemented', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="portfolio_solutions" name="portfolio_solutions" rows="3" class="large-text"><?php echo esc_textarea($solutions); ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="portfolio_results"><?php _e('Results & Impact', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="portfolio_results" name="portfolio_results" rows="3" class="large-text"><?php echo esc_textarea($results); ?></textarea>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Case Study Meta Box Callback
 */
function delivix_custom_case_study_meta_box_callback($post) {
    wp_nonce_field('delivix_custom_save_meta_box_data', 'delivix_custom_meta_box_nonce');

    $client_industry = get_post_meta($post->ID, '_case_study_client_industry', true);
    $project_scope = get_post_meta($post->ID, '_case_study_project_scope', true);
    $timeline = get_post_meta($post->ID, '_case_study_timeline', true);
    $team_size = get_post_meta($post->ID, '_case_study_team_size', true);
    $technologies_used = get_post_meta($post->ID, '_case_study_technologies_used', true);
    $key_metrics = get_post_meta($post->ID, '_case_study_key_metrics', true);
    $lessons_learned = get_post_meta($post->ID, '_case_study_lessons_learned', true);

    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="case_study_client_industry"><?php _e('Client Industry', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="case_study_client_industry" name="case_study_client_industry" value="<?php echo esc_attr($client_industry); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_project_scope"><?php _e('Project Scope', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="case_study_project_scope" name="case_study_project_scope" rows="3" class="large-text"><?php echo esc_textarea($project_scope); ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_timeline"><?php _e('Project Timeline', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="case_study_timeline" name="case_study_timeline" value="<?php echo esc_attr($timeline); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_team_size"><?php _e('Team Size', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="case_study_team_size" name="case_study_team_size" value="<?php echo esc_attr($team_size); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_technologies_used"><?php _e('Technologies Used', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="case_study_technologies_used" name="case_study_technologies_used" rows="2" class="large-text"><?php echo esc_textarea($technologies_used); ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_key_metrics"><?php _e('Key Metrics & Results', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="case_study_key_metrics" name="case_study_key_metrics" rows="3" class="large-text"><?php echo esc_textarea($key_metrics); ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="case_study_lessons_learned"><?php _e('Lessons Learned', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="case_study_lessons_learned" name="case_study_lessons_learned" rows="3" class="large-text"><?php echo esc_textarea($lessons_learned); ?></textarea>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Team Member Meta Box Callback
 */
function delivix_custom_team_member_meta_box_callback($post) {
    wp_nonce_field('delivix_custom_save_meta_box_data', 'delivix_custom_meta_box_nonce');

    $job_title = get_post_meta($post->ID, '_team_member_job_title', true);
    $department = get_post_meta($post->ID, '_team_member_department', true);
    $experience_years = get_post_meta($post->ID, '_team_member_experience_years', true);
    $skills = get_post_meta($post->ID, '_team_member_skills', true);
    $linkedin_url = get_post_meta($post->ID, '_team_member_linkedin_url', true);
    $twitter_url = get_post_meta($post->ID, '_team_member_twitter_url', true);
    $github_url = get_post_meta($post->ID, '_team_member_github_url', true);
    $personal_website = get_post_meta($post->ID, '_team_member_personal_website', true);

    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="team_member_job_title"><?php _e('Job Title', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="team_member_job_title" name="team_member_job_title" value="<?php echo esc_attr($job_title); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_department"><?php _e('Department', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="team_member_department" name="team_member_department" value="<?php echo esc_attr($department); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_experience_years"><?php _e('Years of Experience', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="number" id="team_member_experience_years" name="team_member_experience_years" value="<?php echo esc_attr($experience_years); ?>" min="0" max="50" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_skills"><?php _e('Skills & Expertise', 'delivix-custom'); ?></label>
            </th>
            <td>
                <textarea id="team_member_skills" name="team_member_skills" rows="3" class="large-text"><?php echo esc_textarea($skills); ?></textarea>
                <p class="description"><?php _e('Separate skills with commas', 'delivix-custom'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_linkedin_url"><?php _e('LinkedIn URL', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="team_member_linkedin_url" name="team_member_linkedin_url" value="<?php echo esc_url($linkedin_url); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_twitter_url"><?php _e('Twitter URL', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="team_member_twitter_url" name="team_member_twitter_url" value="<?php echo esc_url($twitter_url); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_github_url"><?php _e('GitHub URL', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="team_member_github_url" name="team_member_github_url" value="<?php echo esc_url($github_url); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="team_member_personal_website"><?php _e('Personal Website', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="team_member_personal_website" name="team_member_personal_website" value="<?php echo esc_url($personal_website); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial Meta Box Callback
 */
function delivix_custom_testimonial_meta_box_callback($post) {
    wp_nonce_field('delivix_custom_save_meta_box_data', 'delivix_custom_meta_box_nonce');

    $client_name = get_post_meta($post->ID, '_testimonial_client_name', true);
    $client_title = get_post_meta($post->ID, '_testimonial_client_title', true);
    $client_company = get_post_meta($post->ID, '_testimonial_client_company', true);
    $client_website = get_post_meta($post->ID, '_testimonial_client_website', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    $project_type = get_post_meta($post->ID, '_testimonial_project_type', true);

    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="testimonial_client_name"><?php _e('Client Name', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="testimonial_client_name" name="testimonial_client_name" value="<?php echo esc_attr($client_name); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_client_title"><?php _e('Client Title', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="testimonial_client_title" name="testimonial_client_title" value="<?php echo esc_attr($client_title); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_client_company"><?php _e('Client Company', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="testimonial_client_company" name="testimonial_client_company" value="<?php echo esc_attr($client_company); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_client_website"><?php _e('Client Website', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="url" id="testimonial_client_website" name="testimonial_client_website" value="<?php echo esc_url($client_website); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_rating"><?php _e('Rating', 'delivix-custom'); ?></label>
            </th>
            <td>
                <select id="testimonial_rating" name="testimonial_rating">
                    <option value=""><?php _e('Select Rating', 'delivix-custom'); ?></option>
                    <option value="5" <?php selected($rating, '5'); ?>><?php _e('5 Stars', 'delivix-custom'); ?></option>
                    <option value="4" <?php selected($rating, '4'); ?>><?php _e('4 Stars', 'delivix-custom'); ?></option>
                    <option value="3" <?php selected($rating, '3'); ?>><?php _e('3 Stars', 'delivix-custom'); ?></option>
                    <option value="2" <?php selected($rating, '2'); ?>><?php _e('2 Stars', 'delivix-custom'); ?></option>
                    <option value="1" <?php selected($rating, '1'); ?>><?php _e('1 Star', 'delivix-custom'); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_project_type"><?php _e('Project Type', 'delivix-custom'); ?></label>
            </th>
            <td>
                <input type="text" id="testimonial_project_type" name="testimonial_project_type" value="<?php echo esc_attr($project_type); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., Web Design, Development, Marketing', 'delivix-custom'); ?></p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save Meta Box Data
 */
function delivix_custom_save_meta_box_data($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['delivix_custom_meta_box_nonce']) || !wp_verify_nonce($_POST['delivix_custom_meta_box_nonce'], 'delivix_custom_save_meta_box_data')) {
        return;
    }

    // Check if user has permissions to save data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Portfolio Meta
    if (isset($_POST['portfolio_client_name'])) {
        update_post_meta($post_id, '_portfolio_client_name', sanitize_text_field($_POST['portfolio_client_name']));
    }
    if (isset($_POST['portfolio_project_date'])) {
        update_post_meta($post_id, '_portfolio_project_date', sanitize_text_field($_POST['portfolio_project_date']));
    }
    if (isset($_POST['portfolio_project_url'])) {
        update_post_meta($post_id, '_portfolio_project_url', esc_url_raw($_POST['portfolio_project_url']));
    }
    if (isset($_POST['portfolio_technologies'])) {
        update_post_meta($post_id, '_portfolio_technologies', sanitize_text_field($_POST['portfolio_technologies']));
    }
    if (isset($_POST['portfolio_project_duration'])) {
        update_post_meta($post_id, '_portfolio_project_duration', sanitize_text_field($_POST['portfolio_project_duration']));
    }
    if (isset($_POST['portfolio_project_budget'])) {
        update_post_meta($post_id, '_portfolio_project_budget', sanitize_text_field($_POST['portfolio_project_budget']));
    }
    if (isset($_POST['portfolio_project_description'])) {
        update_post_meta($post_id, '_portfolio_project_description', sanitize_textarea_field($_POST['portfolio_project_description']));
    }
    if (isset($_POST['portfolio_challenges'])) {
        update_post_meta($post_id, '_portfolio_challenges', sanitize_textarea_field($_POST['portfolio_challenges']));
    }
    if (isset($_POST['portfolio_solutions'])) {
        update_post_meta($post_id, '_portfolio_solutions', sanitize_textarea_field($_POST['portfolio_solutions']));
    }
    if (isset($_POST['portfolio_results'])) {
        update_post_meta($post_id, '_portfolio_results', sanitize_textarea_field($_POST['portfolio_results']));
    }

    // Save Case Study Meta
    if (isset($_POST['case_study_client_industry'])) {
        update_post_meta($post_id, '_case_study_client_industry', sanitize_text_field($_POST['case_study_client_industry']));
    }
    if (isset($_POST['case_study_project_scope'])) {
        update_post_meta($post_id, '_case_study_project_scope', sanitize_textarea_field($_POST['case_study_project_scope']));
    }
    if (isset($_POST['case_study_timeline'])) {
        update_post_meta($post_id, '_case_study_timeline', sanitize_text_field($_POST['case_study_timeline']));
    }
    if (isset($_POST['case_study_team_size'])) {
        update_post_meta($post_id, '_case_study_team_size', sanitize_text_field($_POST['case_study_team_size']));
    }
    if (isset($_POST['case_study_technologies_used'])) {
        update_post_meta($post_id, '_case_study_technologies_used', sanitize_textarea_field($_POST['case_study_technologies_used']));
    }
    if (isset($_POST['case_study_key_metrics'])) {
        update_post_meta($post_id, '_case_study_key_metrics', sanitize_textarea_field($_POST['case_study_key_metrics']));
    }
    if (isset($_POST['case_study_lessons_learned'])) {
        update_post_meta($post_id, '_case_study_lessons_learned', sanitize_textarea_field($_POST['case_study_lessons_learned']));
    }

    // Save Team Member Meta
    if (isset($_POST['team_member_job_title'])) {
        update_post_meta($post_id, '_team_member_job_title', sanitize_text_field($_POST['team_member_job_title']));
    }
    if (isset($_POST['team_member_department'])) {
        update_post_meta($post_id, '_team_member_department', sanitize_text_field($_POST['team_member_department']));
    }
    if (isset($_POST['team_member_experience_years'])) {
        update_post_meta($post_id, '_team_member_experience_years', sanitize_text_field($_POST['team_member_experience_years']));
    }
    if (isset($_POST['team_member_skills'])) {
        update_post_meta($post_id, '_team_member_skills', sanitize_textarea_field($_POST['team_member_skills']));
    }
    if (isset($_POST['team_member_linkedin_url'])) {
        update_post_meta($post_id, '_team_member_linkedin_url', esc_url_raw($_POST['team_member_linkedin_url']));
    }
    if (isset($_POST['team_member_twitter_url'])) {
        update_post_meta($post_id, '_team_member_twitter_url', esc_url_raw($_POST['team_member_twitter_url']));
    }
    if (isset($_POST['team_member_github_url'])) {
        update_post_meta($post_id, '_team_member_github_url', esc_url_raw($_POST['team_member_github_url']));
    }
    if (isset($_POST['team_member_personal_website'])) {
        update_post_meta($post_id, '_team_member_personal_website', esc_url_raw($_POST['team_member_personal_website']));
    }

    // Save Testimonial Meta
    if (isset($_POST['testimonial_client_name'])) {
        update_post_meta($post_id, '_testimonial_client_name', sanitize_text_field($_POST['testimonial_client_name']));
    }
    if (isset($_POST['testimonial_client_title'])) {
        update_post_meta($post_id, '_testimonial_client_title', sanitize_text_field($_POST['testimonial_client_title']));
    }
    if (isset($_POST['testimonial_client_company'])) {
        update_post_meta($post_id, '_testimonial_client_company', sanitize_text_field($_POST['testimonial_client_company']));
    }
    if (isset($_POST['testimonial_client_website'])) {
        update_post_meta($post_id, '_testimonial_client_website', esc_url_raw($_POST['testimonial_client_website']));
    }
    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', sanitize_text_field($_POST['testimonial_rating']));
    }
    if (isset($_POST['testimonial_project_type'])) {
        update_post_meta($post_id, '_testimonial_project_type', sanitize_text_field($_POST['testimonial_project_type']));
    }
}
add_action('save_post', 'delivix_custom_save_meta_box_data');
