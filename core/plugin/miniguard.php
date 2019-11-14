<?php
$ru_plugin_plus++;
$plugin_RL_init_name = "plugin_RL_init_".$ru_plugin_plus;
$$plugin_RL_init_name = new Plugin;
$$plugin_RL_init_name -> name = "miniguard";
$$plugin_RL_init_name -> version = "v.0.0.1";
$$plugin_RL_init_name -> autor = "JaligWei";
$$plugin_RL_init_name -> websiteautor = "redlava.ru";


class miniguard
{
	public $sol1="hbIJPolTOIylYQR0lsTS5Rp7uMLSi4XpqwLB34X6";
	public $sol2="RZVclwKMl52ARI3O1y109VEEXrXvA14Yqqfhg4Lh";
	public $sol3="IWD3iN0Dyv9D5yNGJuYQOHQtlFBw2SuLMHbYCIuiqsrNcqZvgcZYe5xNQv6ET3QJ20jntFbedS8jAfUb";
	public $sol4="vfoAgBnt1ZBBZfWEn70lBCn3ag69TKvq8vpQLCDFLxsmFms133Q02uZYWSfzue7m0AduM5gf8D8SBSlX";
	public function md_rl1($login, $password)
	{
		$s1 = hash('sha256', $login);
		$s2 = hash('sha256', $password);
		$s3 = $s1.$s2;
		$s4 = $s2.$s1;
		$s5 = hash('sha256', $s3);
		$s6 = hash('sha256', $s4);
		$s7 = $s5.$s6;
		$s8 = $s7.$this->sol1;

		$x1=0;
		while($x1 != 10)
		{
			$s8 = hash('sha256', $s8);
			$x1++;
		}
		$s9 = $s8.$this->sol2;
		$s10 = $s9.$s9;
		$s11 = hash('sha256', $s10);
		$s12 = $s11.$this->sol2;
		$s13 = hash('sha256', $s12);
		$s14 = $s13.$this->sol3;
		while($x1 != 30)
		{
			$s14 = hash('sha256', $s14);
			$s14 = $s14 . $this->sol4;
			$x1++;
		}
		$s15 = hash('sha256', $s14);

		return $s15;
	}
}

//test
//$test_redlava_jaligwei_miniguard = new miniguard;

//$test_redlava_jaligwei_miniguard->md_rl1("tester1","test1134");
?>