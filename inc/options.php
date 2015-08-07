<?php
	
	function add_admin_menu()
	{ 
		add_menu_page( 'My Options Page', 'My Options Page', 'manage_options', 'my_options_page', 'my_theme_options_page', 'dashicons-hammer', 66 );
	}
	add_action( 'admin_menu', 'add_admin_menu' );

	
	function settings_init() 
	{ 
	
		register_setting( 'theme_options', 'options_settings' );
		
		add_settings_section( 'options_page_section',__( 'Your section description', 'codediva' ), 'options_page_section_callback', 'theme_options');
		
		function options_page_section_callback() 
		{ 
			echo __( 'Select the changes you want to make and click save' );
		}


		add_settings_field( 
			'select_field', 
			__( 'Change Background Color of Content Area'), //#page { color: ___ ; }
			'select_field_render', 
			'theme_options', 
			'options_page_section' 
		);
		
		add_settings_field( 
			'select_field_2', 
			__( 'Change Text Color for Posts'), //#body { background: ___ ; }
			'select_field_render_2', 
			'theme_options', 
			'options_page_section' 
		);
		
		add_settings_field( 
			'select_field_3', 
			__( 'Change Text Size for Posts '), //#body { background: ___ ; }
			'select_field_render_3', 
			'theme_options', 
			'options_page_section' 
		);
		
		
		function select_field_render() { 
			$options = get_option( 'options_settings' );
			?>
			<select name="options_settings[select_field]">
				<option value="1" <?php if (isset($options['select_field'])) selected( $options['select_field'], 1 ); ?>>Blue</option>	<!-- #352F1B --->
				<option value="2" <?php if (isset($options['select_field'])) selected( $options['select_field'], 2 ); ?>>Black</option>
				<option value="3" <?php if (isset($options['select_field'])) selected( $options['select_field'], 3 ); ?>>Khaki</option>
			</select>
		<?php
		}
		
		function select_field_render_2() { 
			$options = get_option( 'options_settings' );
			?>
			<select name="options_settings[select_field_2]">
				<option value="1" <?php if (isset($options['select_field_2'])) selected( $options['select_field_2'], 1 ); ?>>White</option> 
				<option value="2" <?php if (isset($options['select_field_2'])) selected( $options['select_field_2'], 2 ); ?>>Black</option>
				<option value="3" <?php if (isset($options['select_field_2'])) selected( $options['select_field_2'], 3 ); ?>>Yellow</option>
			</select>
		<?php
		}
		
		function select_field_render_3() { 
			$options = get_option( 'options_settings' );
			?>
			<select name="options_settings[select_field_3]">
				<option value="1" <?php if (isset($options['select_field_3'])) selected( $options['select_field_3'], 1 ); ?>>Small</option> 	<!-- 1em --->
				<option value="2" <?php if (isset($options['select_field_3'])) selected( $options['select_field_3'], 2 ); ?>>Medium</option>	<!-- 1.25em --->
				<option value="3" <?php if (isset($options['select_field_3'])) selected( $options['select_field_3'], 3 ); ?>>Large</option>		<!-- 2.5em --->
			</select>
		<?php
		}
		
		function my_theme_options_page()
		{ 
			?>
			<form action="options.php" method="post">
				<h2>Theme Options Page</h2>
				<?php
				settings_fields( 'theme_options' );
				do_settings_sections( 'theme_options' );
				submit_button();
				?>
			</form>
			<?php
		}

	}
	add_action( 'admin_init', 'settings_init' );
		
?>