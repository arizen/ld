@extends('layouts.default')
@section('content')

<script src="http://rcpyksl.com/table/jquery.js"></script>
<script src="http://rcpyksl.com/table/js/powcheck.js"></script>
<link rel="stylesheet" href="http://rcpyksl.com/table/css/slate.css">
<script src="http://rcpyksl.com/table/js/bootstrap.min.js"></script>
<script>
$(function(){
$("#test").powertable({
showsize: "25",
loadmoresize: "25"
});
});
</script>

	 <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    <div class="center-title">
                        <div class="heading-title">
                            <h2 class="h2-section-title left-text">We Have The Answers</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.                  
                        </p>                       
                    </div>
                    <div class="divider divider-shadow"></div>
                </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-12">
              <table id="test">
<thead>
<tr>
<th search="1">Student Name</th>
<th sort="1">Level</th>
<th sort="1">Class</th>
<th search="1" sort="1">School Number</th>
<th sort="1">Mean Score</th>
<th sort="1">Cost</th>
</tr>
</thead>
<tbody>
<tr>
<td>Edward Rick</td>
<td>5</td>
<td>C</td>
<td>1001</td>
<td>75</td>
<td>36</td>
</tr>
<tr>
<td>Madison Henry</td>
<td>6</td>
<td>F</td>
<td>1002</td>
<td>82</td>
<td>55</td>
</tr>
<tr>
<td>Lillian Henry</td>
<td>12</td>
<td>C</td>
<td>1003</td>
<td>87</td>
<td>42</td>
</tr>
<tr>
<td>John Madison</td>
<td>6</td>
<td>F</td>
<td>1004</td>
<td>98</td>
<td>34</td>
</tr>
<tr>
<td>Jim Emily</td>
<td>12</td>
<td>B</td>
<td>1005</td>
<td>89</td>
<td>52</td>
</tr>
<tr>
<td>Hailey Jennifer</td>
<td>11</td>
<td>E</td>
<td>1006</td>
<td>67</td>
<td>43</td>
</tr>
<tr>
<td>Megan Rick</td>
<td>2</td>
<td>A</td>
<td>1007</td>
<td>66</td>
<td>58</td>
</tr>
<tr>
<td>Emily James</td>
<td>4</td>
<td>C</td>
<td>1008</td>
<td>94</td>
<td>44</td>
</tr>
<tr>
<td>Rick Altair</td>
<td>3</td>
<td>C</td>
<td>1009</td>
<td>64</td>
<td>52</td>
</tr>
<tr>
<td>Isabella Jim</td>
<td>6</td>
<td>C</td>
<td>1010</td>
<td>42</td>
<td>60</td>
</tr>
<tr>
<td>Lisa Emily</td>
<td>12</td>
<td>E</td>
<td>1011</td>
<td>66</td>
<td>58</td>
</tr>
<tr>
<td>David Adam</td>
<td>3</td>
<td>A</td>
<td>1012</td>
<td>80</td>
<td>53</td>
</tr>
<tr>
<td>Alyssa James</td>
<td>3</td>
<td>C</td>
<td>1013</td>
<td>59</td>
<td>36</td>
</tr>
<tr>
<td>Altair Jennifer</td>
<td>4</td>
<td>C</td>
<td>1014</td>
<td>69</td>
<td>45</td>
</tr>
<tr>
<td>Lisa Rick</td>
<td>8</td>
<td>A</td>
<td>1015</td>
<td>87</td>
<td>41</td>
</tr>
<tr>
<td>Jennifer Altair</td>
<td>6</td>
<td>D</td>
<td>1016</td>
<td>56</td>
<td>30.05</td>
</tr>
<tr>
<td>Elizabeth Jane</td>
<td>11</td>
<td>F</td>
<td>1017</td>
<td>75</td>
<td>34</td>
</tr>
<tr>
<td>Hailey John</td>
<td>5</td>
<td>E</td>
<td>1018</td>
<td>87</td>
<td>60</td>
</tr>
<tr>
<td>Hailey Megan</td>
<td>11</td>
<td>E</td>
<td>1019</td>
<td>68</td>
<td>38</td>
</tr>
<tr>
<td>Adam Altair</td>
<td>11</td>
<td>C</td>
<td>1020</td>
<td>84</td>
<td>37</td>
</tr>
<tr>
<td>Nina Emma</td>
<td>5</td>
<td>C</td>
<td>1021</td>
<td>51</td>
<td>46</td>
</tr>
<tr>
<td>Rick Altair</td>
<td>9</td>
<td>F</td>
<td>1022</td>
<td>95</td>
<td>44</td>
</tr>
<tr>
<td>Henry Desmond</td>
<td>12</td>
<td>A</td>
<td>1023</td>
<td>70</td>
<td>50</td>
</tr>
<tr>
<td>George Rick</td>
<td>7</td>
<td>F</td>
<td>1024</td>
<td>42</td>
<td>43</td>
</tr>
<tr>
<td>Lisa John</td>
<td>6</td>
<td>C</td>
<td>1025</td>
<td>48</td>
<td>42</td>
</tr>
<tr>
<td>Adam Lily</td>
<td>3</td>
<td>E</td>
<td>1026</td>
<td>93</td>
<td>57</td>
</tr>
<tr>
<td>Rick Alexander</td>
<td>9</td>
<td>B</td>
<td>1027</td>
<td>92</td>
<td>46</td>
</tr>
<tr>
<td>Lily Hailey</td>
<td>6</td>
<td>D</td>
<td>1028</td>
<td>51</td>
<td>48</td>
</tr>
<tr>
<td>Jennifer Madison</td>
<td>5</td>
<td>B</td>
<td>1029</td>
<td>66</td>
<td>53</td>
</tr>
<tr>
<td>Alyssa Jennifer</td>
<td>12</td>
<td>E</td>
<td>1030</td>
<td>82</td>
<td>38</td>
</tr>
<tr>
<td>George Sandra</td>
<td>3</td>
<td>C</td>
<td>1031</td>
<td>75</td>
<td>56</td>
</tr>
<tr>
<td>Adam Henry</td>
<td>7</td>
<td>E</td>
<td>1032</td>
<td>50</td>
<td>52</td>
</tr>
<tr>
<td>Hailey Lily</td>
<td>12</td>
<td>F</td>
<td>1033</td>
<td>44</td>
<td>47</td>
</tr>
<tr>
<td>Isabella Altair</td>
<td>11</td>
<td>D</td>
<td>1034</td>
<td>61</td>
<td>50</td>
</tr>
<tr>
<td>Henry Emma</td>
<td>5</td>
<td>A</td>
<td>1035</td>
<td>79</td>
<td>50</td>
</tr>
<tr>
<td>Isabella David</td>
<td>10</td>
<td>E</td>
<td>1036</td>
<td>40</td>
<td>55</td>
</tr>
<tr>
<td>Edward Hailey</td>
<td>3</td>
<td>F</td>
<td>1037</td>
<td>43</td>
<td>56</td>
</tr>
<tr>
<td>Hailey Jane</td>
<td>1</td>
<td>C</td>
<td>1038</td>
<td>92</td>
<td>60</td>
</tr>
<tr>
<td>Adam Henry</td>
<td>4</td>
<td>B</td>
<td>1039</td>
<td>42</td>
<td>58</td>
</tr>
<tr>
<td>Jennifer David</td>
<td>5</td>
<td>E</td>
<td>1040</td>
<td>81</td>
<td>57</td>
</tr>
<tr>
<td>Lily Emma</td>
<td>3</td>
<td>A</td>
<td>1041</td>
<td>62</td>
<td>48</td>
</tr>
<tr>
<td>Alexander Emma</td>
<td>6</td>
<td>D</td>
<td>1042</td>
<td>53</td>
<td>38</td>
</tr>
<tr>
<td>Alexis Isabella</td>
<td>11</td>
<td>A</td>
<td>1043</td>
<td>88</td>
<td>50</td>
</tr>
<tr>
<td>Emily Altair</td>
<td>2</td>
<td>C</td>
<td>1044</td>
<td>52</td>
<td>58</td>
</tr>
<tr>
<td>David Nina</td>
<td>12</td>
<td>C</td>
<td>1045</td>
<td>42</td>
<td>55</td>
</tr>
<tr>
<td>David Megan</td>
<td>1</td>
<td>E</td>
<td>1046</td>
<td>64</td>
<td>47</td>
</tr>
<tr>
<td>Lisa Lily</td>
<td>3</td>
<td>A</td>
<td>1047</td>
<td>93</td>
<td>56</td>
</tr>
<tr>
<td>Altair David</td>
<td>1</td>
<td>D</td>
<td>1048</td>
<td>74</td>
<td>58</td>
</tr>
<tr>
<td>George Jim</td>
<td>6</td>
<td>C</td>
<td>1049</td>
<td>43</td>
<td>45</td>
</tr>
<tr>
<td>Henry Alyssa</td>
<td>11</td>
<td>C</td>
<td>1050</td>
<td>67</td>
<td>54</td>
</tr>
<tr>
<td>Elizabeth Megan</td>
<td>4</td>
<td>B</td>
<td>1051</td>
<td>59</td>
<td>46</td>
</tr>
<tr>
<td>James Jack</td>
<td>3</td>
<td>C</td>
<td>1052</td>
<td>87</td>
<td>58</td>
</tr>
<tr>
<td>Jim Alexander</td>
<td>8</td>
<td>C</td>
<td>1053</td>
<td>65</td>
<td>50</td>
</tr>
<tr>
<td>Rick Alyssa</td>
<td>11</td>
<td>B</td>
<td>1054</td>
<td>59</td>
<td>30.10</td>
</tr>
<tr>
<td>Alexis Jennifer</td>
<td>2</td>
<td>A</td>
<td>1055</td>
<td>45</td>
<td>50</td>
</tr>
<tr>
<td>Alexander Alyssa</td>
<td>8</td>
<td>A</td>
<td>1056</td>
<td>90</td>
<td>56</td>
</tr>
<tr>
<td>Alexander Altair</td>
<td>7</td>
<td>D</td>
<td>1057</td>
<td>47</td>
<td>38</td>
</tr>
<tr>
<td>Jim Madison</td>
<td>3</td>
<td>F</td>
<td>1058</td>
<td>42</td>
<td>35</td>
</tr>
<tr>
<td>Henry Alexander</td>
<td>8</td>
<td>C</td>
<td>1059</td>
<td>53</td>
<td>38</td>
</tr>
<tr>
<td>John David</td>
<td>4</td>
<td>E</td>
<td>1060</td>
<td>84</td>
<td>53</td>
</tr>
<tr>
<td>David Desmond</td>
<td>2</td>
<td>D</td>
<td>1061</td>
<td>49</td>
<td>41</td>
</tr>
<tr>
<td>Henry Madison</td>
<td>8</td>
<td>C</td>
<td>1062</td>
<td>77</td>
<td>40</td>
</tr>
<tr>
<td>Nina Madison</td>
<td>10</td>
<td>C</td>
<td>1063</td>
<td>81</td>
<td>41</td>
</tr>
<tr>
<td>Sandra Lillian</td>
<td>2</td>
<td>A</td>
<td>1064</td>
<td>68</td>
<td>50</td>
</tr>
<tr>
<td>Lillian Altair</td>
<td>6</td>
<td>F</td>
<td>1065</td>
<td>73</td>
<td>59</td>
</tr>
<tr>
<td>David John</td>
<td>5</td>
<td>A</td>
<td>1066</td>
<td>41</td>
<td>44</td>
</tr>
<tr>
<td>John Jim</td>
<td>10</td>
<td>B</td>
<td>1067</td>
<td>70</td>
<td>57</td>
</tr>
<tr>
<td>Isabella Hailey</td>
<td>2</td>
<td>A</td>
<td>1068</td>
<td>43</td>
<td>45</td>
</tr>
<tr>
<td>Jim Desmond</td>
<td>7</td>
<td>B</td>
<td>1069</td>
<td>57</td>
<td>60</td>
</tr>
<tr>
<td>Henry Megan</td>
<td>4</td>
<td>C</td>
<td>1070</td>
<td>57</td>
<td>46</td>
</tr>
<tr>
<td>Megan Edward</td>
<td>6</td>
<td>C</td>
<td>1071</td>
<td>79</td>
<td>58</td>
</tr>
<tr>
<td>Alexander Isabella</td>
<td>6</td>
<td>C</td>
<td>1072</td>
<td>69</td>
<td>39</td>
</tr>
<tr>
<td>Emily Jane</td>
<td>4</td>
<td>D</td>
<td>1073</td>
<td>61</td>
<td>44</td>
</tr>
<tr>
<td>John Emma</td>
<td>5</td>
<td>A</td>
<td>1074</td>
<td>63</td>
<td>48</td>
</tr>
<tr>
<td>Isabella Alexander</td>
<td>10</td>
<td>A</td>
<td>1075</td>
<td>49</td>
<td>42</td>
</tr>
<tr>
<td>Elizabeth Lily</td>
<td>12</td>
<td>C</td>
<td>1076</td>
<td>85</td>
<td>33</td>
</tr>
<tr>
<td>Hailey James</td>
<td>10</td>
<td>D</td>
<td>1077</td>
<td>87</td>
<td>43</td>
</tr>
<tr>
<td>Emily Rick</td>
<td>10</td>
<td>D</td>
<td>1078</td>
<td>59</td>
<td>49</td>
</tr>
<tr>
<td>George Madison</td>
<td>11</td>
<td>B</td>
<td>1079</td>
<td>100</td>
<td>40</td>
</tr>
<tr>
<td>Henry David</td>
<td>8</td>
<td>C</td>
<td>1080</td>
<td>92</td>
<td>56</td>
</tr>
<tr>
<td>Rick David</td>
<td>12</td>
<td>E</td>
<td>1081</td>
<td>72</td>
<td>57</td>
</tr>
<tr>
<td>Lisa Elizabeth</td>
<td>4</td>
<td>C</td>
<td>1082</td>
<td>46</td>
<td>48</td>
</tr>
<tr>
<td>Emma John</td>
<td>9</td>
<td>E</td>
<td>1083</td>
<td>50</td>
<td>54</td>
</tr>
<tr>
<td>Lily Altair</td>
<td>7</td>
<td>C</td>
<td>1084</td>
<td>90</td>
<td>48</td>
</tr>
<tr>
<td>Edward George</td>
<td>11</td>
<td>F</td>
<td>1085</td>
<td>79</td>
<td>54</td>
</tr>
<tr>
<td>Lily Jack</td>
<td>2</td>
<td>B</td>
<td>1086</td>
<td>85</td>
<td>47</td>
</tr>
<tr>
<td>Jack Altair</td>
<td>3</td>
<td>C</td>
<td>1087</td>
<td>82</td>
<td>50</td>
</tr>
<tr>
<td>Jack Rick</td>
<td>9</td>
<td>F</td>
<td>1088</td>
<td>78</td>
<td>38</td>
</tr>
<tr>
<td>Isabella Henry</td>
<td>7</td>
<td>C</td>
<td>1089</td>
<td>45</td>
<td>34</td>
</tr>
<tr>
<td>Jane Jack</td>
<td>2</td>
<td>F</td>
<td>1090</td>
<td>53</td>
<td>45</td>
</tr>
<tr>
<td>Emily Lisa</td>
<td>7</td>
<td>B</td>
<td>1091</td>
<td>75</td>
<td>30.99</td>
</tr>
<tr>
<td>Nina Megan</td>
<td>2</td>
<td>F</td>
<td>1092</td>
<td>56</td>
<td>59</td>
</tr>
<tr>
<td>David Alyssa</td>
<td>11</td>
<td>C</td>
<td>1093</td>
<td>94</td>
<td>30.01</td>
</tr>
<tr>
<td>Alexis Jack</td>
<td>5</td>
<td>D</td>
<td>1094</td>
<td>72</td>
<td>42</td>
</tr>
<tr>
<td>Lisa Madison</td>
<td>6</td>
<td>B</td>
<td>1095</td>
<td>88</td>
<td>56</td>
</tr>
<tr>
<td>David Jack</td>
<td>9</td>
<td>A</td>
<td>1096</td>
<td>86</td>
<td>48</td>
</tr>
<tr>
<td>Alyssa Lisa</td>
<td>12</td>
<td>C</td>
<td>1097</td>
<td>41</td>
<td>39</td>
</tr>
<tr>
<td>Alyssa Jane</td>
<td>10</td>
<td>D</td>
<td>1098</td>
<td>82</td>
<td>38</td>
</tr>
<tr>
<td>Isabella Emily</td>
<td>2</td>
<td>A</td>
<td>1099</td>
<td>61</td>
<td>34</td>
</tr>
<tr>
<td>Elizabeth Lisa</td>
<td>6</td>
<td>C</td>
<td>1100</td>
<td>45</td>
<td>35</td>
</tr>
</tbody>
<tfoot>
<tr>
<td>
</td>
<td>
</td>
<td>
<span class="btn-success btn" loadmore="1">Load More</span>
</td>
<td>
</td>
<td>
</td>
<td>
Total : <span total="1"></span>
</td>
</tr>
</table>
            </div>
            

        </div>
        
    </div>
@stop