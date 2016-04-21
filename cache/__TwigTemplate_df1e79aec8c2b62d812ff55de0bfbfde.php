<?php

/* teachers/index.html */
class __TwigTemplate_df1e79aec8c2b62d812ff55de0bfbfde extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("teachers/teachers-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headcss($context, array $blocks = array())
    {
        // line 4
        $this->getParentBlock("headcss", $context, $blocks);
    }

    // line 6
    public function block_headjavascript($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo "<div align=\"center\">
<span class=\"head_top\">Список групп:</span>
<table id=\"rounded-corner\">
<!--thead-->
  <tr>
    <th class=\"rounded-left\">Группа</th>
    <th>Предмет</th>
    <th class=\"rounded-right\">&nbsp;</th>
\t<th class=\"rounded-right\">&nbsp;</th>
\t
  </tr>
<!--/thead-->
<tbody>
";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['classes_list']) ? $context['classes_list'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['class']) {
            echo "  <tr>
  \t<td>";
            // line 25
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "class", array(), "array");
            echo "-";
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "letter", array(), "array");
            echo "</td>
  \t<td>";
            // line 26
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "discipline", array(), "array");
            echo "</td>
  \t<td><a href=\"class_lessons.php?subject_id=";
            // line 27
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "subject_id", array(), "array");
            echo "\">Пары</a></td>
  \t<td><a href=\"attendance.php?subject_id=";
            // line 28
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "subject_id", array(), "array");
            echo "\">Посещаемость</a></td>
  </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "</tbody>
<!--tfoot-->
\t<tr>
    \t<td colspan=\"2\" class=\"rounded-foot-left\"></td>
        <td class=\"rounded-foot-right\">&nbsp;</td>
\t\t<td class=\"rounded-foot-right\">&nbsp;</td>
    </tr>
<!--/tfoot-->
</table>
</div>
";
    }

}
