<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_00cc7192d8f7383c2f8e0ea539dc14008f5f01fc1219fb31e6ed0fb59ff305a5 extends Twig_Template
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
        $__internal_b69848214d226c59848a0beee397df5ce56f30f014b93b58fe813f24c07cc3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69848214d226c59848a0beee397df5ce56f30f014b93b58fe813f24c07cc3b8->enter($__internal_b69848214d226c59848a0beee397df5ce56f30f014b93b58fe813f24c07cc3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_377355f303e8dbaf63a4f4190c56f1857564e08ca3de96d911aae7087d2e451f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377355f303e8dbaf63a4f4190c56f1857564e08ca3de96d911aae7087d2e451f->enter($__internal_377355f303e8dbaf63a4f4190c56f1857564e08ca3de96d911aae7087d2e451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b69848214d226c59848a0beee397df5ce56f30f014b93b58fe813f24c07cc3b8->leave($__internal_b69848214d226c59848a0beee397df5ce56f30f014b93b58fe813f24c07cc3b8_prof);

        
        $__internal_377355f303e8dbaf63a4f4190c56f1857564e08ca3de96d911aae7087d2e451f->leave($__internal_377355f303e8dbaf63a4f4190c56f1857564e08ca3de96d911aae7087d2e451f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
