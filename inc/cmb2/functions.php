<?php 


add_action('cmb2_admin_init',function(){


		 $prefix = "_extra";

		$postformat = new_cmb2_box(array(
				'id'            => $prefix . 'metabox',
				'title'         => esc_html__( 'Post Format Field', 'cmb2' ),
				'object_types'  => array( 'post' ), // Post type

			));

		$postformat-> add_field(array(
				'id'            => $prefix.'vid-postsss',
				'name'         => esc_html__( 'Video Post', 'cmb2' ),
				'type' 		 	=> 'oembed', // Post type

		));
		$postformat-> add_field(array(
				'id'            => $prefix.'long-post',
				'name'         => esc_html__( 'Image Height 687px', 'cmb2' ),
				'type' 		 	=> 'file', // Post type

		));
		$postformat-> add_field(array(
				'id'            => $prefix.'short-post',
				'name'         => esc_html__( 'Image Height 387px', 'cmb2' ),
				'type' 		 	=> 'file', // Post type

		));


		$cmb = new_cmb2_box( array(
		  'id'           =>  $prefix.'prefix-metabox-id',
		  'title'        => __( 'Service Required Icons', 'textdomain' ),
		  'object_types' => array( 'devide_services', ), // Post type
		) );

		// Add new field
		$cmb->add_field( array(
		  'name'        => __( 'Service Icon', 'textdomain' ),
		  'id'          =>  $prefix.'prefix_icon',
		  'type'        => 'fontawesome_icon', // This field type
		) );


	});












