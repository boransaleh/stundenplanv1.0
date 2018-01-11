<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_73ba457ef6b5e835b5b193344238b4a8cf8906aab024c1e7adc6b74b713ef783 extends Twig_Template
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
        $__internal_6302db0e1607b84d9d29ac2d2b4505669f165bab4f19c0417cde2313d0879aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6302db0e1607b84d9d29ac2d2b4505669f165bab4f19c0417cde2313d0879aec->enter($__internal_6302db0e1607b84d9d29ac2d2b4505669f165bab4f19c0417cde2313d0879aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2e91ed98cc21297ac792785c668b62b87de10e5188b89638aeea68922340dc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e91ed98cc21297ac792785c668b62b87de10e5188b89638aeea68922340dc6f->enter($__internal_2e91ed98cc21297ac792785c668b62b87de10e5188b89638aeea68922340dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6302db0e1607b84d9d29ac2d2b4505669f165bab4f19c0417cde2313d0879aec->leave($__internal_6302db0e1607b84d9d29ac2d2b4505669f165bab4f19c0417cde2313d0879aec_prof);

        
        $__internal_2e91ed98cc21297ac792785c668b62b87de10e5188b89638aeea68922340dc6f->leave($__internal_2e91ed98cc21297ac792785c668b62b87de10e5188b89638aeea68922340dc6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
