<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_854a4c12885bd3bf0bb9a9a3d2332422afb8f848877ec7f55bcdd90aa94b2966 extends Twig_Template
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
        $__internal_414c436ff6adce38467ef4f3cca28fc886cb43b45521f605de865d0dcb7c5ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414c436ff6adce38467ef4f3cca28fc886cb43b45521f605de865d0dcb7c5ec9->enter($__internal_414c436ff6adce38467ef4f3cca28fc886cb43b45521f605de865d0dcb7c5ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a7aa7514388155e7e447e92d47a682ba71c4d956a71ce32ad6982fd7b237b0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aa7514388155e7e447e92d47a682ba71c4d956a71ce32ad6982fd7b237b0cd->enter($__internal_a7aa7514388155e7e447e92d47a682ba71c4d956a71ce32ad6982fd7b237b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_414c436ff6adce38467ef4f3cca28fc886cb43b45521f605de865d0dcb7c5ec9->leave($__internal_414c436ff6adce38467ef4f3cca28fc886cb43b45521f605de865d0dcb7c5ec9_prof);

        
        $__internal_a7aa7514388155e7e447e92d47a682ba71c4d956a71ce32ad6982fd7b237b0cd->leave($__internal_a7aa7514388155e7e447e92d47a682ba71c4d956a71ce32ad6982fd7b237b0cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
