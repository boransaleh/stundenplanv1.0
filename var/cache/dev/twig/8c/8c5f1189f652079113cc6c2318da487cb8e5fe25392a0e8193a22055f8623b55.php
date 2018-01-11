<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ee4f531b1b0c41c0f15b87bf0dc07a1f307df6883d74c4f7f45f59b8b7f59715 extends Twig_Template
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
        $__internal_5ffafccd1224bd43eab765a845401b5623961fd85c42edb197492c03e5763987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffafccd1224bd43eab765a845401b5623961fd85c42edb197492c03e5763987->enter($__internal_5ffafccd1224bd43eab765a845401b5623961fd85c42edb197492c03e5763987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2adb6148b965438c89dfc32c5bdd103db98a720977f25574f5716fbcb4343c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adb6148b965438c89dfc32c5bdd103db98a720977f25574f5716fbcb4343c6b->enter($__internal_2adb6148b965438c89dfc32c5bdd103db98a720977f25574f5716fbcb4343c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5ffafccd1224bd43eab765a845401b5623961fd85c42edb197492c03e5763987->leave($__internal_5ffafccd1224bd43eab765a845401b5623961fd85c42edb197492c03e5763987_prof);

        
        $__internal_2adb6148b965438c89dfc32c5bdd103db98a720977f25574f5716fbcb4343c6b->leave($__internal_2adb6148b965438c89dfc32c5bdd103db98a720977f25574f5716fbcb4343c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
