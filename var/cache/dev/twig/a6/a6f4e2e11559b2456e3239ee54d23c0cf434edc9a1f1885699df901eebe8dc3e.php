<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d0514f088d7d4d8b3c2a02299df3779ea5f60aaa5f6bd23e56a0d1ea60820e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd2b215321eb19281dcf76f4fdcbf9b356077b6d435c62c81699800857db976f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2b215321eb19281dcf76f4fdcbf9b356077b6d435c62c81699800857db976f->enter($__internal_dd2b215321eb19281dcf76f4fdcbf9b356077b6d435c62c81699800857db976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_aabcb7a5746943a8166dc1caec5bc2b5773a460bed50827f108a83dcc0967dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabcb7a5746943a8166dc1caec5bc2b5773a460bed50827f108a83dcc0967dae->enter($__internal_aabcb7a5746943a8166dc1caec5bc2b5773a460bed50827f108a83dcc0967dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dd2b215321eb19281dcf76f4fdcbf9b356077b6d435c62c81699800857db976f->leave($__internal_dd2b215321eb19281dcf76f4fdcbf9b356077b6d435c62c81699800857db976f_prof);

        
        $__internal_aabcb7a5746943a8166dc1caec5bc2b5773a460bed50827f108a83dcc0967dae->leave($__internal_aabcb7a5746943a8166dc1caec5bc2b5773a460bed50827f108a83dcc0967dae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
