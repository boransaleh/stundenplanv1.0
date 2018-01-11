<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d336ce55b2f95ceebf4ded61114c728207bd950fa1c3cfb89d4986ac57d6b111 extends Twig_Template
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
        $__internal_6d787b09677f4360745e92b92ad2930d92de51520e86bccc7aac6d4c823dd331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d787b09677f4360745e92b92ad2930d92de51520e86bccc7aac6d4c823dd331->enter($__internal_6d787b09677f4360745e92b92ad2930d92de51520e86bccc7aac6d4c823dd331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_34f18763a581a1ace1b9287e4bfde57d0e6b8dbebbe24ba3ecdc45ffe6575964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f18763a581a1ace1b9287e4bfde57d0e6b8dbebbe24ba3ecdc45ffe6575964->enter($__internal_34f18763a581a1ace1b9287e4bfde57d0e6b8dbebbe24ba3ecdc45ffe6575964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6d787b09677f4360745e92b92ad2930d92de51520e86bccc7aac6d4c823dd331->leave($__internal_6d787b09677f4360745e92b92ad2930d92de51520e86bccc7aac6d4c823dd331_prof);

        
        $__internal_34f18763a581a1ace1b9287e4bfde57d0e6b8dbebbe24ba3ecdc45ffe6575964->leave($__internal_34f18763a581a1ace1b9287e4bfde57d0e6b8dbebbe24ba3ecdc45ffe6575964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
