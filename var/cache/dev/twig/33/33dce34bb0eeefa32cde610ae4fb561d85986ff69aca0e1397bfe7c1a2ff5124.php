<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_39f8792600605c67464b91c80078185788fbe9631af17cbee13a2ee3b53f57f4 extends Twig_Template
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
        $__internal_c8315b398c7d9621b2048c4f2e27462f9ad48cf1296c174b600aaa69744d0b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8315b398c7d9621b2048c4f2e27462f9ad48cf1296c174b600aaa69744d0b5b->enter($__internal_c8315b398c7d9621b2048c4f2e27462f9ad48cf1296c174b600aaa69744d0b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d719ddba22e4b03f3c7031c1009ef755b0b06c5bfc34183cec7830ec5f626e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d719ddba22e4b03f3c7031c1009ef755b0b06c5bfc34183cec7830ec5f626e5b->enter($__internal_d719ddba22e4b03f3c7031c1009ef755b0b06c5bfc34183cec7830ec5f626e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c8315b398c7d9621b2048c4f2e27462f9ad48cf1296c174b600aaa69744d0b5b->leave($__internal_c8315b398c7d9621b2048c4f2e27462f9ad48cf1296c174b600aaa69744d0b5b_prof);

        
        $__internal_d719ddba22e4b03f3c7031c1009ef755b0b06c5bfc34183cec7830ec5f626e5b->leave($__internal_d719ddba22e4b03f3c7031c1009ef755b0b06c5bfc34183cec7830ec5f626e5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
