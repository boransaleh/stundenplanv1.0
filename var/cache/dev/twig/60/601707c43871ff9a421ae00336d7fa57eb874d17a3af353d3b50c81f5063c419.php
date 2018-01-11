<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f29daf1bf21853d9dcd93f3516e57e75fc0f8b4118a7851a4a38de42640b4ad6 extends Twig_Template
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
        $__internal_1062716421236c63001fca0e0019c6b197bdf1b7cc455c9e92376a0d6dd4464b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1062716421236c63001fca0e0019c6b197bdf1b7cc455c9e92376a0d6dd4464b->enter($__internal_1062716421236c63001fca0e0019c6b197bdf1b7cc455c9e92376a0d6dd4464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_887cb344ee9e1e0d3ddd025e7890b47564d56fdb5b7e1e5e4ab984bb954a7f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887cb344ee9e1e0d3ddd025e7890b47564d56fdb5b7e1e5e4ab984bb954a7f11->enter($__internal_887cb344ee9e1e0d3ddd025e7890b47564d56fdb5b7e1e5e4ab984bb954a7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1062716421236c63001fca0e0019c6b197bdf1b7cc455c9e92376a0d6dd4464b->leave($__internal_1062716421236c63001fca0e0019c6b197bdf1b7cc455c9e92376a0d6dd4464b_prof);

        
        $__internal_887cb344ee9e1e0d3ddd025e7890b47564d56fdb5b7e1e5e4ab984bb954a7f11->leave($__internal_887cb344ee9e1e0d3ddd025e7890b47564d56fdb5b7e1e5e4ab984bb954a7f11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
