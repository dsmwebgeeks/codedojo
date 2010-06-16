#!/usr/bin/env python
#
# Copyright 2007 Google Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
from google.appengine.ext import webapp
from google.appengine.ext.webapp import util

csv1 = """107109,2010-03-06
173612,2010-03-07
143609,2010-03-08
145339,2010-03-09
142328,2010-03-10
137524,2010-03-11
101430,2010-03-12
101548,2010-03-13
158655,2010-03-14
156535,2010-03-15
167842,2010-03-16
138754,2010-03-17
117558,2010-03-18
109492,2010-03-19
99356,2010-03-20
82167,2010-03-21
136628,2010-03-22
140655,2010-03-23
133788,2010-03-24
151141,2010-03-25
105140,2010-03-26
106638,2010-03-27
151916,2010-03-28
108089,2010-03-29
140674,2010-03-30
125500,2010-03-31
149446,2010-04-01
115608,2010-04-02
65150,2010-04-03
154263,2010-04-04
133457,2010-04-05
136929,2010-04-06
135774,2010-04-07
119539,2010-04-08
94844,2010-04-09
22274,2010-04-10
18563,2010-04-11
10897,2010-04-12
48304,2010-04-13
113793,2010-04-14
109500,2010-04-15
63742,2010-04-16
88347,2010-04-17
105357,2010-04-18
145945,2010-04-19
35851,2010-04-20
5136,2010-04-21
104485,2010-04-22
69406,2010-04-23
81447,2010-04-24
139897,2010-04-25
164351,2010-04-26
169575,2010-04-27
153108,2010-04-28
81170,2010-04-29
844,2010-04-30
383,2010-05-01
85907,2010-05-02
209775,2010-05-03
165628,2010-05-04
131842,2010-05-05
120627,2010-05-06
65494,2010-05-07
95972,2010-05-08
114090,2010-05-09
113725,2010-05-10
131353,2010-05-11
138180,2010-05-12
146656,2010-05-13
120090,2010-05-14
76686,2010-05-15
111235,2010-05-16
158613,2010-05-17
145842,2010-05-18
131654,2010-05-19
109034,2010-05-20
70725,2010-05-21
93372,2010-05-22
140197,2010-05-23
117965,2010-05-24
167964,2010-05-25
121975,2010-05-26
93930,2010-05-27
51544,2010-05-28
54696,2010-05-29
148036,2010-05-30
131165,2010-05-31
104487,2010-06-01
119432,2010-06-02
69389,2010-06-03
79503,2010-06-04
56325,2010-06-05
121123,2010-06-06"""
csv2 = """6219,2010-03-06
10331,2010-03-07
11083,2010-03-08
9385,2010-03-09
10198,2010-03-10
9387,2010-03-11
5023,2010-03-12
5496,2010-03-13
9767,2010-03-14
10436,2010-03-15
7247,2010-03-16
8045,2010-03-17
6701,2010-03-18
3868,2010-03-19
3813,2010-03-20
6676,2010-03-21
7049,2010-03-22
6706,2010-03-23
6534,2010-03-24
5899,2010-03-25
3387,2010-03-26
3740,2010-03-27
6637,2010-03-28
6765,2010-03-29
6885,2010-03-30
7223,2010-03-31
6510,2010-04-01
3792,2010-04-02
3892,2010-04-03
6381,2010-04-04
6354,2010-04-05
6136,2010-04-06
6454,2010-04-07
6324,2010-04-08
3966,2010-04-09
3638,2010-04-10
6585,2010-04-11
6440,2010-04-12
6408,2010-04-13
6402,2010-04-14
4922,2010-04-15
3105,2010-04-16
3152,2010-04-17
4470,2010-04-18
6119,2010-04-19
6707,2010-04-20
6917,2010-04-21
5828,2010-04-22
3570,2010-04-23
3578,2010-04-24
6674,2010-04-25
6405,2010-04-26
6368,2010-04-27
6316,2010-04-28
6055,2010-04-29
3536,2010-04-30
3433,2010-05-01
6155,2010-05-02
6495,2010-05-03
6545,2010-05-04
6173,2010-05-05
5916,2010-05-06
3049,2010-05-07
3367,2010-05-08
5656,2010-05-09
6653,2010-05-10
6144,2010-05-11
5944,2010-05-12
5435,2010-05-13
3438,2010-05-14
3404,2010-05-15
5275,2010-05-16
6032,2010-05-17
5663,2010-05-18
5926,2010-05-19
5507,2010-05-20
3294,2010-05-21
3101,2010-05-22
5757,2010-05-23
5858,2010-05-24
5660,2010-05-25
5781,2010-05-26
5421,2010-05-27
3539,2010-05-28
3201,2010-05-29
6212,2010-05-30
5739,2010-05-31
6397,2010-06-01
5429,2010-06-02
4834,2010-06-03
3234,2010-06-04
2918,2010-06-05
4742,2010-06-06"""
csv3 = """294218,2010-03-06
310300,2010-03-07
311655,2010-03-08
305468,2010-03-09
315611,2010-03-10
305087,2010-03-11
282164,2010-03-12
291096,2010-03-13
313972,2010-03-14
317391,2010-03-15
330870,2010-03-16
574602,2010-03-17
398427,2010-03-18
316819,2010-03-19
310637,2010-03-20
328090,2010-03-21
322708,2010-03-22
309127,2010-03-23
307099,2010-03-24
302368,2010-03-25
287759,2010-03-26
289373,2010-03-27
313758,2010-03-28
296554,2010-03-29
307421,2010-03-30
329475,2010-03-31
321200,2010-04-01
285413,2010-04-02
269043,2010-04-03
314263,2010-04-04
310504,2010-04-05
300470,2010-04-06
295156,2010-04-07
286363,2010-04-08
270242,2010-04-09
264460,2010-04-10
303814,2010-04-11
295323,2010-04-12
287553,2010-04-13
276774,2010-04-14
279423,2010-04-15
254170,2010-04-16
240907,2010-04-17
278499,2010-04-18
297111,2010-04-19
295726,2010-04-20
311745,2010-04-21
294394,2010-04-22
257538,2010-04-23
262027,2010-04-24
293371,2010-04-25
293408,2010-04-26
244437,2010-04-27
280587,2010-04-28
277572,2010-04-29
248739,2010-04-30
258973,2010-05-01
298302,2010-05-02
298833,2010-05-03
303359,2010-05-04
315625,2010-05-05
292448,2010-05-06
258682,2010-05-07
265434,2010-05-08
308393,2010-05-09
310515,2010-05-10
327391,2010-05-11
549567,2010-05-12
608578,2010-05-13
504408,2010-05-14
466387,2010-05-15
488103,2010-05-16
443052,2010-05-17
407827,2010-05-18
379157,2010-05-19
356212,2010-05-20
335458,2010-05-21
323220,2010-05-22
356560,2010-05-23
356134,2010-05-24
341850,2010-05-25
333131,2010-05-26
312792,2010-05-27
277491,2010-05-28
284775,2010-05-29
314512,2010-05-30
316760,2010-05-31
315298,2010-06-01
303448,2010-06-02
287683,2010-06-03
255823,2010-06-04
259183,2010-06-05
289687,2010-06-06"""
xml1 = """<?xml version="1.0"?><dataset><date>2010-03-06</date><value>107109</value><date>2010-03-07</date><value>173612</value><date>2010-03-08</date><value>143609</value><date>2010-03-09</date><value>145339</value><date>2010-03-10</date><value>142328</value><date>2010-03-11</date><value>137524</value><date>2010-03-12</date><value>101430</value><date>2010-03-13</date><value>101548</value><date>2010-03-14</date><value>158655</value><date>2010-03-15</date><value>156535</value><date>2010-03-16</date><value>167842</value><date>2010-03-17</date><value>138754</value><date>2010-03-18</date><value>117558</value><date>2010-03-19</date><value>109492</value><date>2010-03-20</date><value>99356</value><date>2010-03-21</date><value>82167</value><date>2010-03-22</date><value>136628</value><date>2010-03-23</date><value>140655</value><date>2010-03-24</date><value>133788</value><date>2010-03-25</date><value>151141</value><date>2010-03-26</date><value>105140</value><date>2010-03-27</date><value>106638</value><date>2010-03-28</date><value>151916</value><date>2010-03-29</date><value>108089</value><date>2010-03-30</date><value>140674</value><date>2010-03-31</date><value>125500</value><date>2010-04-01</date><value>149446</value><date>2010-04-02</date><value>115608</value><date>2010-04-03</date><value>65150</value><date>2010-04-04</date><value>154263</value><date>2010-04-05</date><value>133457</value><date>2010-04-06</date><value>136929</value><date>2010-04-07</date><value>135774</value><date>2010-04-08</date><value>119539</value><date>2010-04-09</date><value>94844</value><date>2010-04-10</date><value>22274</value><date>2010-04-11</date><value>18563</value><date>2010-04-12</date><value>10897</value><date>2010-04-13</date><value>48304</value><date>2010-04-14</date><value>113793</value><date>2010-04-15</date><value>109500</value><date>2010-04-16</date><value>63742</value><date>2010-04-17</date><value>88347</value><date>2010-04-18</date><value>105357</value><date>2010-04-19</date><value>145945</value><date>2010-04-20</date><value>35851</value><date>2010-04-21</date><value>5136</value><date>2010-04-22</date><value>104485</value><date>2010-04-23</date><value>69406</value><date>2010-04-24</date><value>81447</value><date>2010-04-25</date><value>139897</value><date>2010-04-26</date><value>164351</value><date>2010-04-27</date><value>169575</value><date>2010-04-28</date><value>153108</value><date>2010-04-29</date><value>81170</value><date>2010-04-30</date><value>844</value><date>2010-05-01</date><value>383</value><date>2010-05-02</date><value>85907</value><date>2010-05-03</date><value>209775</value><date>2010-05-04</date><value>165628</value><date>2010-05-05</date><value>131842</value><date>2010-05-06</date><value>120627</value><date>2010-05-07</date><value>65494</value><date>2010-05-08</date><value>95972</value><date>2010-05-09</date><value>114090</value><date>2010-05-10</date><value>113725</value><date>2010-05-11</date><value>131353</value><date>2010-05-12</date><value>138180</value><date>2010-05-13</date><value>146656</value><date>2010-05-14</date><value>120090</value><date>2010-05-15</date><value>76686</value><date>2010-05-16</date><value>111235</value><date>2010-05-17</date><value>158613</value><date>2010-05-18</date><value>145842</value><date>2010-05-19</date><value>131654</value><date>2010-05-20</date><value>109034</value><date>2010-05-21</date><value>70725</value><date>2010-05-22</date><value>93372</value><date>2010-05-23</date><value>140197</value><date>2010-05-24</date><value>117965</value><date>2010-05-25</date><value>167964</value><date>2010-05-26</date><value>121975</value><date>2010-05-27</date><value>93930</value><date>2010-05-28</date><value>51544</value><date>2010-05-29</date><value>54696</value><date>2010-05-30</date><value>148036</value><date>2010-05-31</date><value>131165</value><date>2010-06-01</date><value>104487</value><date>2010-06-02</date><value>119432</value><date>2010-06-03</date><value>69389</value><date>2010-06-04</date><value>79503</value><date>2010-06-05</date><value>56325</value><date>2010-06-06</date><value>121123</value></dataset>"""
xml2 = """<?xml version="1.0"?><dataset><date>2010-03-06</date><value>6219</value><date>2010-03-07</date><value>10331</value><date>2010-03-08</date><value>11083</value><date>2010-03-09</date><value>9385</value><date>2010-03-10</date><value>10198</value><date>2010-03-11</date><value>9387</value><date>2010-03-12</date><value>5023</value><date>2010-03-13</date><value>5496</value><date>2010-03-14</date><value>9767</value><date>2010-03-15</date><value>10436</value><date>2010-03-16</date><value>7247</value><date>2010-03-17</date><value>8045</value><date>2010-03-18</date><value>6701</value><date>2010-03-19</date><value>3868</value><date>2010-03-20</date><value>3813</value><date>2010-03-21</date><value>6676</value><date>2010-03-22</date><value>7049</value><date>2010-03-23</date><value>6706</value><date>2010-03-24</date><value>6534</value><date>2010-03-25</date><value>5899</value><date>2010-03-26</date><value>3387</value><date>2010-03-27</date><value>3740</value><date>2010-03-28</date><value>6637</value><date>2010-03-29</date><value>6765</value><date>2010-03-30</date><value>6885</value><date>2010-03-31</date><value>7223</value><date>2010-04-01</date><value>6510</value><date>2010-04-02</date><value>3792</value><date>2010-04-03</date><value>3892</value><date>2010-04-04</date><value>6381</value><date>2010-04-05</date><value>6354</value><date>2010-04-06</date><value>6136</value><date>2010-04-07</date><value>6454</value><date>2010-04-08</date><value>6324</value><date>2010-04-09</date><value>3966</value><date>2010-04-10</date><value>3638</value><date>2010-04-11</date><value>6585</value><date>2010-04-12</date><value>6440</value><date>2010-04-13</date><value>6408</value><date>2010-04-14</date><value>6402</value><date>2010-04-15</date><value>4922</value><date>2010-04-16</date><value>3105</value><date>2010-04-17</date><value>3152</value><date>2010-04-18</date><value>4470</value><date>2010-04-19</date><value>6119</value><date>2010-04-20</date><value>6707</value><date>2010-04-21</date><value>6917</value><date>2010-04-22</date><value>5828</value><date>2010-04-23</date><value>3570</value><date>2010-04-24</date><value>3578</value><date>2010-04-25</date><value>6674</value><date>2010-04-26</date><value>6405</value><date>2010-04-27</date><value>6368</value><date>2010-04-28</date><value>6316</value><date>2010-04-29</date><value>6055</value><date>2010-04-30</date><value>3536</value><date>2010-05-01</date><value>3433</value><date>2010-05-02</date><value>6155</value><date>2010-05-03</date><value>6495</value><date>2010-05-04</date><value>6545</value><date>2010-05-05</date><value>6173</value><date>2010-05-06</date><value>5916</value><date>2010-05-07</date><value>3049</value><date>2010-05-08</date><value>3367</value><date>2010-05-09</date><value>5656</value><date>2010-05-10</date><value>6653</value><date>2010-05-11</date><value>6144</value><date>2010-05-12</date><value>5944</value><date>2010-05-13</date><value>5435</value><date>2010-05-14</date><value>3438</value><date>2010-05-15</date><value>3404</value><date>2010-05-16</date><value>5275</value><date>2010-05-17</date><value>6032</value><date>2010-05-18</date><value>5663</value><date>2010-05-19</date><value>5926</value><date>2010-05-20</date><value>5507</value><date>2010-05-21</date><value>3294</value><date>2010-05-22</date><value>3101</value><date>2010-05-23</date><value>5757</value><date>2010-05-24</date><value>5858</value><date>2010-05-25</date><value>5660</value><date>2010-05-26</date><value>5781</value><date>2010-05-27</date><value>5421</value><date>2010-05-28</date><value>3539</value><date>2010-05-29</date><value>3201</value><date>2010-05-30</date><value>6212</value><date>2010-05-31</date><value>5739</value><date>2010-06-01</date><value>6397</value><date>2010-06-02</date><value>5429</value><date>2010-06-03</date><value>4834</value><date>2010-06-04</date><value>3234</value><date>2010-06-05</date><value>2918</value><date>2010-06-06</date><value>4742</value></dataset>"""
xml3 = """<?xml version="1.0"?><dataset><date>2010-03-06</date><value>294218</value><date>2010-03-07</date><value>310300</value><date>2010-03-08</date><value>311655</value><date>2010-03-09</date><value>305468</value><date>2010-03-10</date><value>315611</value><date>2010-03-11</date><value>305087</value><date>2010-03-12</date><value>282164</value><date>2010-03-13</date><value>291096</value><date>2010-03-14</date><value>313972</value><date>2010-03-15</date><value>317391</value><date>2010-03-16</date><value>330870</value><date>2010-03-17</date><value>574602</value><date>2010-03-18</date><value>398427</value><date>2010-03-19</date><value>316819</value><date>2010-03-20</date><value>310637</value><date>2010-03-21</date><value>328090</value><date>2010-03-22</date><value>322708</value><date>2010-03-23</date><value>309127</value><date>2010-03-24</date><value>307099</value><date>2010-03-25</date><value>302368</value><date>2010-03-26</date><value>287759</value><date>2010-03-27</date><value>289373</value><date>2010-03-28</date><value>313758</value><date>2010-03-29</date><value>296554</value><date>2010-03-30</date><value>307421</value><date>2010-03-31</date><value>329475</value><date>2010-04-01</date><value>321200</value><date>2010-04-02</date><value>285413</value><date>2010-04-03</date><value>269043</value><date>2010-04-04</date><value>314263</value><date>2010-04-05</date><value>310504</value><date>2010-04-06</date><value>300470</value><date>2010-04-07</date><value>295156</value><date>2010-04-08</date><value>286363</value><date>2010-04-09</date><value>270242</value><date>2010-04-10</date><value>264460</value><date>2010-04-11</date><value>303814</value><date>2010-04-12</date><value>295323</value><date>2010-04-13</date><value>287553</value><date>2010-04-14</date><value>276774</value><date>2010-04-15</date><value>279423</value><date>2010-04-16</date><value>254170</value><date>2010-04-17</date><value>240907</value><date>2010-04-18</date><value>278499</value><date>2010-04-19</date><value>297111</value><date>2010-04-20</date><value>295726</value><date>2010-04-21</date><value>311745</value><date>2010-04-22</date><value>294394</value><date>2010-04-23</date><value>257538</value><date>2010-04-24</date><value>262027</value><date>2010-04-25</date><value>293371</value><date>2010-04-26</date><value>293408</value><date>2010-04-27</date><value>244437</value><date>2010-04-28</date><value>280587</value><date>2010-04-29</date><value>277572</value><date>2010-04-30</date><value>248739</value><date>2010-05-01</date><value>258973</value><date>2010-05-02</date><value>298302</value><date>2010-05-03</date><value>298833</value><date>2010-05-04</date><value>303359</value><date>2010-05-05</date><value>315625</value><date>2010-05-06</date><value>292448</value><date>2010-05-07</date><value>258682</value><date>2010-05-08</date><value>265434</value><date>2010-05-09</date><value>308393</value><date>2010-05-10</date><value>310515</value><date>2010-05-11</date><value>327391</value><date>2010-05-12</date><value>549567</value><date>2010-05-13</date><value>608578</value><date>2010-05-14</date><value>504408</value><date>2010-05-15</date><value>466387</value><date>2010-05-16</date><value>488103</value><date>2010-05-17</date><value>443052</value><date>2010-05-18</date><value>407827</value><date>2010-05-19</date><value>379157</value><date>2010-05-20</date><value>356212</value><date>2010-05-21</date><value>335458</value><date>2010-05-22</date><value>323220</value><date>2010-05-23</date><value>356560</value><date>2010-05-24</date><value>356134</value><date>2010-05-25</date><value>341850</value><date>2010-05-26</date><value>333131</value><date>2010-05-27</date><value>312792</value><date>2010-05-28</date><value>277491</value><date>2010-05-29</date><value>284775</value><date>2010-05-30</date><value>314512</value><date>2010-05-31</date><value>316760</value><date>2010-06-01</date><value>315298</value><date>2010-06-02</date><value>303448</value><date>2010-06-03</date><value>287683</value><date>2010-06-04</date><value>255823</value><date>2010-06-05</date><value>259183</value><date>2010-06-06</date><value>289687</value></dataset>"""
json1 = """{
    "dataset": [
        {"date": "2010-03-06", "value": 107109},
        {"date": "2010-03-07", "value": 173612},
        {"date": "2010-03-08", "value": 143609},
        {"date": "2010-03-09", "value": 145339},
        {"date": "2010-03-10", "value": 142328},
        {"date": "2010-03-11", "value": 137524},
        {"date": "2010-03-12", "value": 101430},
        {"date": "2010-03-13", "value": 101548},
        {"date": "2010-03-14", "value": 158655},
        {"date": "2010-03-15", "value": 156535},
        {"date": "2010-03-16", "value": 167842},
        {"date": "2010-03-17", "value": 138754},
        {"date": "2010-03-18", "value": 117558},
        {"date": "2010-03-19", "value": 109492},
        {"date": "2010-03-20", "value": 99356},
        {"date": "2010-03-21", "value": 82167},
        {"date": "2010-03-22", "value": 136628},
        {"date": "2010-03-23", "value": 140655},
        {"date": "2010-03-24", "value": 133788},
        {"date": "2010-03-25", "value": 151141},
        {"date": "2010-03-26", "value": 105140},
        {"date": "2010-03-27", "value": 106638},
        {"date": "2010-03-28", "value": 151916},
        {"date": "2010-03-29", "value": 108089},
        {"date": "2010-03-30", "value": 140674},
        {"date": "2010-03-31", "value": 125500},
        {"date": "2010-04-01", "value": 149446},
        {"date": "2010-04-02", "value": 115608},
        {"date": "2010-04-03", "value": 65150},
        {"date": "2010-04-04", "value": 154263},
        {"date": "2010-04-05", "value": 133457},
        {"date": "2010-04-06", "value": 136929},
        {"date": "2010-04-07", "value": 135774},
        {"date": "2010-04-08", "value": 119539},
        {"date": "2010-04-09", "value": 94844},
        {"date": "2010-04-10", "value": 22274},
        {"date": "2010-04-11", "value": 18563},
        {"date": "2010-04-12", "value": 10897},
        {"date": "2010-04-13", "value": 48304},
        {"date": "2010-04-14", "value": 113793},
        {"date": "2010-04-15", "value": 109500},
        {"date": "2010-04-16", "value": 63742},
        {"date": "2010-04-17", "value": 88347},
        {"date": "2010-04-18", "value": 105357},
        {"date": "2010-04-19", "value": 145945},
        {"date": "2010-04-20", "value": 35851},
        {"date": "2010-04-21", "value": 5136},
        {"date": "2010-04-22", "value": 104485},
        {"date": "2010-04-23", "value": 69406},
        {"date": "2010-04-24", "value": 81447},
        {"date": "2010-04-25", "value": 139897},
        {"date": "2010-04-26", "value": 164351},
        {"date": "2010-04-27", "value": 169575},
        {"date": "2010-04-28", "value": 153108},
        {"date": "2010-04-29", "value": 81170},
        {"date": "2010-04-30", "value": 844},
        {"date": "2010-05-01", "value": 383},
        {"date": "2010-05-02", "value": 85907},
        {"date": "2010-05-03", "value": 209775},
        {"date": "2010-05-04", "value": 165628},
        {"date": "2010-05-05", "value": 131842},
        {"date": "2010-05-06", "value": 120627},
        {"date": "2010-05-07", "value": 65494},
        {"date": "2010-05-08", "value": 95972},
        {"date": "2010-05-09", "value": 114090},
        {"date": "2010-05-10", "value": 113725},
        {"date": "2010-05-11", "value": 131353},
        {"date": "2010-05-12", "value": 138180},
        {"date": "2010-05-13", "value": 146656},
        {"date": "2010-05-14", "value": 120090},
        {"date": "2010-05-15", "value": 76686},
        {"date": "2010-05-16", "value": 111235},
        {"date": "2010-05-17", "value": 158613},
        {"date": "2010-05-18", "value": 145842},
        {"date": "2010-05-19", "value": 131654},
        {"date": "2010-05-20", "value": 109034},
        {"date": "2010-05-21", "value": 70725},
        {"date": "2010-05-22", "value": 93372},
        {"date": "2010-05-23", "value": 140197},
        {"date": "2010-05-24", "value": 117965},
        {"date": "2010-05-25", "value": 167964},
        {"date": "2010-05-26", "value": 121975},
        {"date": "2010-05-27", "value": 93930},
        {"date": "2010-05-28", "value": 51544},
        {"date": "2010-05-29", "value": 54696},
        {"date": "2010-05-30", "value": 148036},
        {"date": "2010-05-31", "value": 131165},
        {"date": "2010-06-01", "value": 104487},
        {"date": "2010-06-02", "value": 119432},
        {"date": "2010-06-03", "value": 69389},
        {"date": "2010-06-04", "value": 79503},
        {"date": "2010-06-05", "value": 56325},
        {"date": "2010-06-06", "value": 121123}
    ]
}"""
json2 = """{
    "dataset": [
        {"date": "2010-03-06", "value": 6219},
        {"date": "2010-03-07", "value": 10331},
        {"date": "2010-03-08", "value": 11083},
        {"date": "2010-03-09", "value": 9385},
        {"date": "2010-03-10", "value": 10198},
        {"date": "2010-03-11", "value": 9387},
        {"date": "2010-03-12", "value": 5023},
        {"date": "2010-03-13", "value": 5496},
        {"date": "2010-03-14", "value": 9767},
        {"date": "2010-03-15", "value": 10436},
        {"date": "2010-03-16", "value": 7247},
        {"date": "2010-03-17", "value": 8045},
        {"date": "2010-03-18", "value": 6701},
        {"date": "2010-03-19", "value": 3868},
        {"date": "2010-03-20", "value": 3813},
        {"date": "2010-03-21", "value": 6676},
        {"date": "2010-03-22", "value": 7049},
        {"date": "2010-03-23", "value": 6706},
        {"date": "2010-03-24", "value": 6534},
        {"date": "2010-03-25", "value": 5899},
        {"date": "2010-03-26", "value": 3387},
        {"date": "2010-03-27", "value": 3740},
        {"date": "2010-03-28", "value": 6637},
        {"date": "2010-03-29", "value": 6765},
        {"date": "2010-03-30", "value": 6885},
        {"date": "2010-03-31", "value": 7223},
        {"date": "2010-04-01", "value": 6510},
        {"date": "2010-04-02", "value": 3792},
        {"date": "2010-04-03", "value": 3892},
        {"date": "2010-04-04", "value": 6381},
        {"date": "2010-04-05", "value": 6354},
        {"date": "2010-04-06", "value": 6136},
        {"date": "2010-04-07", "value": 6454},
        {"date": "2010-04-08", "value": 6324},
        {"date": "2010-04-09", "value": 3966},
        {"date": "2010-04-10", "value": 3638},
        {"date": "2010-04-11", "value": 6585},
        {"date": "2010-04-12", "value": 6440},
        {"date": "2010-04-13", "value": 6408},
        {"date": "2010-04-14", "value": 6402},
        {"date": "2010-04-15", "value": 4922},
        {"date": "2010-04-16", "value": 3105},
        {"date": "2010-04-17", "value": 3152},
        {"date": "2010-04-18", "value": 4470},
        {"date": "2010-04-19", "value": 6119},
        {"date": "2010-04-20", "value": 6707},
        {"date": "2010-04-21", "value": 6917},
        {"date": "2010-04-22", "value": 5828},
        {"date": "2010-04-23", "value": 3570},
        {"date": "2010-04-24", "value": 3578},
        {"date": "2010-04-25", "value": 6674},
        {"date": "2010-04-26", "value": 6405},
        {"date": "2010-04-27", "value": 6368},
        {"date": "2010-04-28", "value": 6316},
        {"date": "2010-04-29", "value": 6055},
        {"date": "2010-04-30", "value": 3536},
        {"date": "2010-05-01", "value": 3433},
        {"date": "2010-05-02", "value": 6155},
        {"date": "2010-05-03", "value": 6495},
        {"date": "2010-05-04", "value": 6545},
        {"date": "2010-05-05", "value": 6173},
        {"date": "2010-05-06", "value": 5916},
        {"date": "2010-05-07", "value": 3049},
        {"date": "2010-05-08", "value": 3367},
        {"date": "2010-05-09", "value": 5656},
        {"date": "2010-05-10", "value": 6653},
        {"date": "2010-05-11", "value": 6144},
        {"date": "2010-05-12", "value": 5944},
        {"date": "2010-05-13", "value": 5435},
        {"date": "2010-05-14", "value": 3438},
        {"date": "2010-05-15", "value": 3404},
        {"date": "2010-05-16", "value": 5275},
        {"date": "2010-05-17", "value": 6032},
        {"date": "2010-05-18", "value": 5663},
        {"date": "2010-05-19", "value": 5926},
        {"date": "2010-05-20", "value": 5507},
        {"date": "2010-05-21", "value": 3294},
        {"date": "2010-05-22", "value": 3101},
        {"date": "2010-05-23", "value": 5757},
        {"date": "2010-05-24", "value": 5858},
        {"date": "2010-05-25", "value": 5660},
        {"date": "2010-05-26", "value": 5781},
        {"date": "2010-05-27", "value": 5421},
        {"date": "2010-05-28", "value": 3539},
        {"date": "2010-05-29", "value": 3201},
        {"date": "2010-05-30", "value": 6212},
        {"date": "2010-05-31", "value": 5739},
        {"date": "2010-06-01", "value": 6397},
        {"date": "2010-06-02", "value": 5429},
        {"date": "2010-06-03", "value": 4834},
        {"date": "2010-06-04", "value": 3234},
        {"date": "2010-06-05", "value": 2918},
        {"date": "2010-06-06", "value": 4742}
    ]
}"""
json3 = """{
    "dataset": [
        {"date": "2010-03-06", "value": 294218},
        {"date": "2010-03-07", "value": 310300},
        {"date": "2010-03-08", "value": 311655},
        {"date": "2010-03-09", "value": 305468},
        {"date": "2010-03-10", "value": 315611},
        {"date": "2010-03-11", "value": 305087},
        {"date": "2010-03-12", "value": 282164},
        {"date": "2010-03-13", "value": 291096},
        {"date": "2010-03-14", "value": 313972},
        {"date": "2010-03-15", "value": 317391},
        {"date": "2010-03-16", "value": 330870},
        {"date": "2010-03-17", "value": 574602},
        {"date": "2010-03-18", "value": 398427},
        {"date": "2010-03-19", "value": 316819},
        {"date": "2010-03-20", "value": 310637},
        {"date": "2010-03-21", "value": 328090},
        {"date": "2010-03-22", "value": 322708},
        {"date": "2010-03-23", "value": 309127},
        {"date": "2010-03-24", "value": 307099},
        {"date": "2010-03-25", "value": 302368},
        {"date": "2010-03-26", "value": 287759},
        {"date": "2010-03-27", "value": 289373},
        {"date": "2010-03-28", "value": 313758},
        {"date": "2010-03-29", "value": 296554},
        {"date": "2010-03-30", "value": 307421},
        {"date": "2010-03-31", "value": 329475},
        {"date": "2010-04-01", "value": 321200},
        {"date": "2010-04-02", "value": 285413},
        {"date": "2010-04-03", "value": 269043},
        {"date": "2010-04-04", "value": 314263},
        {"date": "2010-04-05", "value": 310504},
        {"date": "2010-04-06", "value": 300470},
        {"date": "2010-04-07", "value": 295156},
        {"date": "2010-04-08", "value": 286363},
        {"date": "2010-04-09", "value": 270242},
        {"date": "2010-04-10", "value": 264460},
        {"date": "2010-04-11", "value": 303814},
        {"date": "2010-04-12", "value": 295323},
        {"date": "2010-04-13", "value": 287553},
        {"date": "2010-04-14", "value": 276774},
        {"date": "2010-04-15", "value": 279423},
        {"date": "2010-04-16", "value": 254170},
        {"date": "2010-04-17", "value": 240907},
        {"date": "2010-04-18", "value": 278499},
        {"date": "2010-04-19", "value": 297111},
        {"date": "2010-04-20", "value": 295726},
        {"date": "2010-04-21", "value": 311745},
        {"date": "2010-04-22", "value": 294394},
        {"date": "2010-04-23", "value": 257538},
        {"date": "2010-04-24", "value": 262027},
        {"date": "2010-04-25", "value": 293371},
        {"date": "2010-04-26", "value": 293408},
        {"date": "2010-04-27", "value": 244437},
        {"date": "2010-04-28", "value": 280587},
        {"date": "2010-04-29", "value": 277572},
        {"date": "2010-04-30", "value": 248739},
        {"date": "2010-05-01", "value": 258973},
        {"date": "2010-05-02", "value": 298302},
        {"date": "2010-05-03", "value": 298833},
        {"date": "2010-05-04", "value": 303359},
        {"date": "2010-05-05", "value": 315625},
        {"date": "2010-05-06", "value": 292448},
        {"date": "2010-05-07", "value": 258682},
        {"date": "2010-05-08", "value": 265434},
        {"date": "2010-05-09", "value": 308393},
        {"date": "2010-05-10", "value": 310515},
        {"date": "2010-05-11", "value": 327391},
        {"date": "2010-05-12", "value": 549567},
        {"date": "2010-05-13", "value": 608578},
        {"date": "2010-05-14", "value": 504408},
        {"date": "2010-05-15", "value": 466387},
        {"date": "2010-05-16", "value": 488103},
        {"date": "2010-05-17", "value": 443052},
        {"date": "2010-05-18", "value": 407827},
        {"date": "2010-05-19", "value": 379157},
        {"date": "2010-05-20", "value": 356212},
        {"date": "2010-05-21", "value": 335458},
        {"date": "2010-05-22", "value": 323220},
        {"date": "2010-05-23", "value": 356560},
        {"date": "2010-05-24", "value": 356134},
        {"date": "2010-05-25", "value": 341850},
        {"date": "2010-05-26", "value": 333131},
        {"date": "2010-05-27", "value": 312792},
        {"date": "2010-05-28", "value": 277491},
        {"date": "2010-05-29", "value": 284775},
        {"date": "2010-05-30", "value": 314512},
        {"date": "2010-05-31", "value": 316760},
        {"date": "2010-06-01", "value": 315298},
        {"date": "2010-06-02", "value": 303448},
        {"date": "2010-06-03", "value": 287683},
        {"date": "2010-06-04", "value": 255823},
        {"date": "2010-06-05", "value": 259183},
        {"date": "2010-06-06", "value": 289687}
    ]
}"""


class MainHandler(webapp.RequestHandler):
    def get(self):
        self.response.out.write('Hello world!')

class Wk2Handler(webapp.RequestHandler):
    def get(self, dataformat, dataset):
        if dataformat == 'xml':
            self.response.headers['Content-Type'] = "application/xml"
            if dataset == '1':
                self.response.out.write(xml1)
            if dataset == '2':
                self.response.out.write(xml2)
            if dataset == '3':
                self.response.out.write(xml3)
        if dataformat == 'csv':
            self.response.headers['Content-Type'] = "text/csv"
            if dataset == '1':
                self.response.out.write(csv1)
            if dataset == '2':
                self.response.out.write(csv2)
            if dataset == '3':
                self.response.out.write(csv3)
        if dataformat == 'json':
            self.response.headers['Content-Type'] = "application/json"
            if dataset == '1':
                self.response.out.write(json1)
            if dataset == '2':
                self.response.out.write(json2)
            if dataset == '3':
                self.response.out.write(json3)
        if dataformat == 'jsonp':
            self.response.headers['Content-Type'] = "application/json"
            # gotta do something special here
            callback = self.request.get('jsonp', 'readData')
            if dataset == '1':
                self.response.out.write('%s(%s)' % (callback, json1))
            if dataset == '2':
                self.response.out.write('%s(%s)' % (callback, json2))
            if dataset == '3':
                self.response.out.write('%s(%s)' % (callback, json3))
        #self.response.out.write('format %s, set %s' % (dataformat, dataset))

def main():
    application = webapp.WSGIApplication([('/', MainHandler),
                                          ('/wk2/(?P<dataformat>.*)/(?P<dataset>\d+)',Wk2Handler)
                                          ],
                                         debug=True)
    util.run_wsgi_app(application)


if __name__ == '__main__':
    main()
