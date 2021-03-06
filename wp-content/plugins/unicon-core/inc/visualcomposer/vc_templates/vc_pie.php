<?php
$title = $el_class = $value = $label_value = $units = $output_escaped = '';
extract(shortcode_atts(array(
'title' => '',
'el_class' => '',
'value' => '50',
'units' => '',
'color' => 'turquoise',
'label_value' => ''
), $atts));

wp_enqueue_script('vc_pie');

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_pie_chart wpb_content_element' . $el_class, $this->settings['base'], $atts );
$output_escaped = "\n\t".'<div class= "'.esc_attr($css_class).'" data-pie-value="'.esc_attr($value).'" data-pie-label-value="'.esc_attr($label_value).'" data-pie-units="'.esc_attr($units).'" data-pie-color="'.htmlspecialchars(minti_hex2rgba($color, 1)).'">';
    $output_escaped .= "\n\t\t".'<div class="wpb_wrapper">';
        $output_escaped .= "\n\t\t\t".'<div class="vc_pie_wrapper">';
            $output_escaped .= "\n\t\t\t".'<span class="vc_pie_chart_back" style="border-color: '.esc_attr($color).';"></span>';
            $output_escaped .= "\n\t\t\t".'<span class="vc_pie_chart_value" style="color: '.esc_attr($color).';"></span>';
            $output_escaped .= "\n\t\t\t".'<canvas width="101" height="101"></canvas>';
            $output_escaped .= "\n\t\t\t".'</div>';
        if ($title!='') {
        $output_escaped .= '<h4 class="wpb_heading wpb_pie_chart_heading">'.esc_html($title).'</h4>';
        }
        //wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_pie_chart_heading'));
    $output_escaped .= "\n\t\t".'</div>'.$this->endBlockComment('.wpb_wrapper');
    $output_escaped .= "\n\t".'</div>'.$this->endBlockComment('.wpb_pie_chart')."\n";

echo $output_escaped; // WPCS: xss ok. 