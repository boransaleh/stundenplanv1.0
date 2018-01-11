<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d04075da58fc4bd783f8dba54f1b31828d47f2437bafe49059fd9fc3069f2431 extends Twig_Template
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
        $__internal_338c1b99c75c27510ef617366499d4eb8dc1db7d70d300d3f4c6973fbb880819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338c1b99c75c27510ef617366499d4eb8dc1db7d70d300d3f4c6973fbb880819->enter($__internal_338c1b99c75c27510ef617366499d4eb8dc1db7d70d300d3f4c6973fbb880819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_df68e8a94beb142dc6f1a2c3dafe50a5fcf4977d002ef60d41e8e0801ce0be8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df68e8a94beb142dc6f1a2c3dafe50a5fcf4977d002ef60d41e8e0801ce0be8f->enter($__internal_df68e8a94beb142dc6f1a2c3dafe50a5fcf4977d002ef60d41e8e0801ce0be8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_338c1b99c75c27510ef617366499d4eb8dc1db7d70d300d3f4c6973fbb880819->leave($__internal_338c1b99c75c27510ef617366499d4eb8dc1db7d70d300d3f4c6973fbb880819_prof);

        
        $__internal_df68e8a94beb142dc6f1a2c3dafe50a5fcf4977d002ef60d41e8e0801ce0be8f->leave($__internal_df68e8a94beb142dc6f1a2c3dafe50a5fcf4977d002ef60d41e8e0801ce0be8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
