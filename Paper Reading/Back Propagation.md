论文标题: Learning representations by back-propagating errors[^1].
# 1 研究问题
对于简单的神经网络——输出单元直接与输入单元相连，我们很容易去学习连接过程的参数. 但当并没有直接定义的隐藏单元被引入到神经网络之中, 学习这些连接参数变得较为困难.
# 2 解决方法
提出反向传播的算法, 通过学习连接过程的参数使得实际值与目标值的偏差度量最小. *总偏差*定义为

$$E=\frac{1}{2}\sum_{c}\sum_{j}(y_{j,c}-d_{j,c})^{2} \tag{1}$$
^02ac45

其中$c$是案例(输入-输出对)的索引, $j$是输出单元的索引, $y$是输出单元的实际值而$d$是目标值. 我们的*目标*变为寻找$\mathrm{argmin}_{w}E$.
不失一般性, 我们考虑单元$j$的输入$x_{j}$与输出$y_{j}$, 总输入$x_{j}$定义为下层单元输出值的线性函数:

$$x_{j}=\sum_{i}y_{i}w_{ji}\tag{2}$$

^0cae26

其中$y_{i}$为第$i$个单元的输出, $w_{ji}$表示连接第$i$个单元到第$j$个单元的参数.
每个单元都有其输出值, 通过非线性函数$\mathrm{Sigmoid}$函数定义

$$y_{j}=\frac{1}{1+\mathrm{e}^{-x_{j}}}\tag{3}$$ ^5274ea

按照反向传播的定义, 我们对$E$关于$y$求偏导. 固定[[#^02ac45|(1)]]中的$c$, 对单元$j$的输出$y_{j}$求偏导

$$\frac{\partial E}{\partial y_{j}}=y_{j}-d_{j}\tag{4}$$

^49d48a

再对$x_{j}$求偏导

$$\frac{\partial y_{j}}{x_{j}}=y_{j}(1-y_{j})\tag{5}$$

^8a8cb7

对[[#^49d48a|(4)]]与[[#^8a8cb7|(5)]]应用链式法则
$$\frac{\partial E}{\partial x_{j}}=\frac{\partial E}{\partial y_{j}}\cdot\frac{\partial y_{j}}{\partial x_{j}}=(y_{j}-d_{j})\cdot y_{j}(1-y_{j})\tag{6}$$

再次利用链式法则与[[#^0cae26|(2)]]对$w_{ji}$求偏导

$$\frac{\partial E}{\partial w_{ji}}=\frac{\partial E}{\partial x_{j}}\cdot\frac{\partial x_{j}}{w_{ji}}=\frac{\partial E}{\partial x_{j}}\cdot y_{i}\tag{7}$$

^6518d4

上式便可用于我们后续对于参数$w_{ji}$的学习.
注意到[[#^0cae26|(2)]]与[[#^5274ea|(3)]]的定义并不固定, 任何有界可微函数都可以替代, 但用一个线性函数将所有输入结合再用非线性函数可以大大简化学习的过程. 

接下来我们便可以利用[[#^6518d4|(7)]]来学习$w$来达到最小化$E$的目的. 利用最简单的梯度下降的方法, 每一次学习后我们都更新参数$w$.
$$\Delta w=-\varepsilon\frac{\partial E}{\partial w}\tag{8}$$其中$\varepsilon$为我们设定的学习率. 这种方法收敛的并不是很快, 但相对简单也易实现. 在不失简单性和局部性的情况下，将当前梯度用于优化参数的速度而不是其位置，可以对上述方法进行改进
$$\Delta w(t)=-\varepsilon\frac{\partial E}{\partial w(t)}+\alpha\Delta w(t-1)\tag{9}$$
其中$t$表示每次利用输入-输出对对整个网络进行优化的次数, $\alpha$是介于$0$到$1$之间的指数衰减因子，它决定了当前梯度和早期梯度对权重变化的相对贡献。

[^1]: Rumelhart, D., Hinton, G. & Williams, R. Learning representations by back-propagating errors. _Nature_ **323**, 533–536 (1986). https://doi.org/10.1038/323533a0