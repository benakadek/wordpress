#this is the php query to get term for search param

<form method="POST">
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Job Type</div>
		<div class="panel">
		<?php
		// get taxonomy term and sort by acf, field name is 'number'
		$args = 
   			array(
     		'taxonomy'     => 'job_listing_type',
		 	'hide_empty'   => false,
    	 	'orderby'      =>'meta_value',
    		'meta_key'     => 'number'
   		);
		$terms = get_terms($args);


		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-type'])) { ?>
					<input type="checkbox" id="job-type-<?php echo $term->term_id; ?>" class="form-check-input" name="job-type[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-type'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-type-<?php echo $term->term_id; ?>" class="form-check-input" name="job-type[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-type-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Career Level</div>
		<div class="panel">
		<?php
		// get taxonomy term and sort by acf, field name is 'number'
		$args = 
   			array(
     		'taxonomy'     => 'job_listing_career_level',
		 	'hide_empty'   => false,
    	 	'orderby'      =>'meta_value',
    		'meta_key'     => 'number'
   		);
		$terms = get_terms($args);
		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-level'])) { ?>
					<input type="checkbox" id="job-level-<?php echo $term->term_id; ?>" class="form-check-input" name="job-level[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-level'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-level-<?php echo $term->term_id; ?>" class="form-check-input" name="job-level[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-level-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Salary Range</div>
		<div class="panel">
		<?php
		// get taxonomy term and sort by acf, field name is 'number'
		$args = 
   			array(
     		'taxonomy'     => 'job_listing_salary',
		 	'hide_empty'   => false,
    	 	'orderby'      =>'meta_value_num',
    		'meta_key'     => 'number'
   		);
		$terms = get_terms($args);
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) {?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-salaries'])) { ?>
					<input type="checkbox" id="job-salaries-<?php echo $term->term_id; ?>" class="form-check-input" name="job-salaries[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-salaries'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-salaries-<?php echo $term->term_id; ?>" class="form-check-input" name="job-salaries[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-salaries-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Experience</div>
		<div class="panel">
		<?php
		// get taxonomy term and sort by acf, field name is 'number'
		$args = 
   			array(
     		'taxonomy'     => 'job_listing_experience',
		 	'hide_empty'   => false,
    	 	'orderby'      =>'meta_value_num',
    		'meta_key'     => 'number'
   		);
		$terms = get_terms($args);
		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-experience'])) { ?>
					<input type="checkbox" id="job-experience-<?php echo $term->term_id; ?>" class="form-check-input" name="job-experience[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-experience'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-experience-<?php echo $term->term_id; ?>" class="form-check-input" name="job-experience[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-experience-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Industry</div>
		<div class="panel">
		<?php
		// get taxonomy term and sort by acf, field name is 'number'
		$args = 
   			array(
     		'taxonomy'     => 'job_listing_industry',
		 	'hide_empty'   => false,
    	 	'orderby'      =>'meta_value_num', // use meta_value atau meta_value_num
    		'meta_key'     => 'number'
   		);
		$terms = get_terms($args);

		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-industry'])) { ?>
					<input type="checkbox" id="job-industry-<?php echo $term->term_id; ?>" class="form-check-input" name="job-industry[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-industry'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-industry-<?php echo $term->term_id; ?>" class="form-check-input" name="job-industry[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-industry-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Qualification</div>
		<div class="panel">
		<?php
		// Get the taxonomy's terms
		$terms = get_terms(
			array(
				'taxonomy'   => 'job_listing_qualification',
				'hide_empty' => false,
			)
		);

		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-qualification'])) { ?>
					<input type="checkbox" id="job-qualification-<?php echo $term->term_id; ?>" class="form-check-input" name="job-qualification[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-qualification'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-qualification-<?php echo $term->term_id; ?>" class="form-check-input" name="job-qualification[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-qualification-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	<div class="accordion-wrapper">
		<div class="accordion" role="button">Gender</div>
		<div class="panel">
		<?php
		// Get the taxonomy's terms
		$terms = get_terms(
			array(
				'taxonomy'   => 'job_listing_gender',
				'hide_empty' => false,
			)
		);

		// Check if any term exists
		if ( ! empty( $terms ) && is_array( $terms ) ) {
			// Run a loop and print them all
			foreach ( $terms as $term ) { ?>
			<div class="form-filter-item">
				<?php if(isset($_POST['job-gender'])) { ?>
					<input type="checkbox" id="job-gender-<?php echo $term->term_id; ?>" class="form-check-input" name="job-gender[]" value="<?php echo $term->term_id; ?>" <?php if(in_array($term->term_id, $_POST['job-gender'])){ echo "checked"; } ?>>
				<?php }else{ ?>
					<input type="checkbox" id="job-gender-<?php echo $term->term_id; ?>" class="form-check-input" name="job-gender[]" value="<?php echo $term->term_id; ?>">
				<?php } ?>
				<label for="job-gender-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></label>
			</div>
		<?php
			}
		}
		?>
		</div>
	</div>
	<div style="height: 8px;"></div>
	
	
	<button type="submit" name="filter_job" class="sas-btnsearch">Apply Filter</button>
</form>


#javascript


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
