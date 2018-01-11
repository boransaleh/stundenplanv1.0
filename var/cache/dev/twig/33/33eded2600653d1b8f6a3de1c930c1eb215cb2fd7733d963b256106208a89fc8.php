<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2a84202551682fb133e7cf1eae13cda648aa847b7f73d79c36f794283c18890c extends Twig_Template
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
        $__internal_77ddec9fa0cd75d6a276057bdfd593d70a7d8e5de09f5c23dc64fae92bf8fb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ddec9fa0cd75d6a276057bdfd593d70a7d8e5de09f5c23dc64fae92bf8fb26->enter($__internal_77ddec9fa0cd75d6a276057bdfd593d70a7d8e5de09f5c23dc64fae92bf8fb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c04fe4f5bcd32de94bc5344233c331a6fe458691e7cc266979bd45af61d2b74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04fe4f5bcd32de94bc5344233c331a6fe458691e7cc266979bd45af61d2b74e->enter($__internal_c04fe4f5bcd32de94bc5344233c331a6fe458691e7cc266979bd45af61d2b74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_77ddec9fa0cd75d6a276057bdfd593d70a7d8e5de09f5c23dc64fae92bf8fb26->leave($__internal_77ddec9fa0cd75d6a276057bdfd593d70a7d8e5de09f5c23dc64fae92bf8fb26_prof);

        
        $__internal_c04fe4f5bcd32de94bc5344233c331a6fe458691e7cc266979bd45af61d2b74e->leave($__internal_c04fe4f5bcd32de94bc5344233c331a6fe458691e7cc266979bd45af61d2b74e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
