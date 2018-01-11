<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_42cfa9816ff94bb7ef4e7f0b87c37a0da2fdc7de0ef505b1868d3027fd04e179 extends Twig_Template
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
        $__internal_07d1cadfd05a06f312106b3aa2945b240a2bd712f5655693fc6f198847d62d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d1cadfd05a06f312106b3aa2945b240a2bd712f5655693fc6f198847d62d48->enter($__internal_07d1cadfd05a06f312106b3aa2945b240a2bd712f5655693fc6f198847d62d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1204019f9471cd11621bc59efb7ec8e33aab9871d909a33e29c305a9f5e22767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1204019f9471cd11621bc59efb7ec8e33aab9871d909a33e29c305a9f5e22767->enter($__internal_1204019f9471cd11621bc59efb7ec8e33aab9871d909a33e29c305a9f5e22767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_07d1cadfd05a06f312106b3aa2945b240a2bd712f5655693fc6f198847d62d48->leave($__internal_07d1cadfd05a06f312106b3aa2945b240a2bd712f5655693fc6f198847d62d48_prof);

        
        $__internal_1204019f9471cd11621bc59efb7ec8e33aab9871d909a33e29c305a9f5e22767->leave($__internal_1204019f9471cd11621bc59efb7ec8e33aab9871d909a33e29c305a9f5e22767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
