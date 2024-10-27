论文标题: A Stochastic Approximation Method[^1].
# 1 研究问题
已知$M(x)$为一未知函数, $\alpha$为一个给定常量使得等式
$$M(x)=\alpha \tag{1}$$有唯一解$x=\theta$. 我们想要找到上述的等式的解.
# 2 解决方法: 构造一个收敛至$\theta$的数列$\{x_{n}\}$
通过给定初始值$x_{1},\cdots,x_{r}$迭代生成$x_{n}$, $x_{n}$由$x_{1},\cdots,x_{n-1},M(x_{1}),\cdots,M(x_{n-1})$以及可能存在的导数$M^{\prime}(x_{1}),\cdots,M^{\prime}(x_{n-1})$作为自变量的函数生成.
我们将证明通过上述方法生成的数列$\{x_{n}\}$将*依概率收敛*至$\theta.$(收敛速度取决于迭代方式的选取)
如果
$$\lim\limits_{n\rightarrow\infty}x_{n}=\theta\tag{2}$$
与初始值$x_{1},\cdots,x_{r}$的选取无关, 我们称上述方法对于特定的$M(x)$与$\alpha$是*有效*的.
# 3 理论证明
## 引入
我们可以认为每一个$x$对应一个随机变量$Y=Y(x),Y(X)$有分布函数$Pr[Y(x)\leq y]=H(y|x)$使得

$$M(x)=\int_{-\infty}^{\infty}y\ \mathrm{d}H(y|x)=E[Y|x] \tag{3}$$

^ff7078


与$M(x)$一样的, 这里的$H(y|x)$也是未知的. 
如果[[#^ff7078|(2)]]初始值依概率收敛到$\theta$, 且$x_{1},\cdots,x_{r}$的选取无关, 我们称这个过程对于给定的$H(y|x)$和$\alpha$是*一致的*.
## Lemma 1.
在下述证明过程中我们会给$M(x)$添加一些重要的限制, 这些限制往往在实际中容易满足.
接下来, 我们认为$H(y|x)$是对于每个$x$的关于$y$的分布函数, 并且存在一个正实数$C$, 使得

$$Pr[\lvert Y(x)\rvert\leq C]=\int_{-C}^{C}\ \mathrm{d}H(y|x)=1\qquad \mathrm{for\ all\ }x.\tag{4}$$

^215f5e

认为对每个$x$, 由[[#^ff7078|(2)]]定义的$M(x)$存在且有限, 进一步认为存在有限常数$\alpha,\theta$使得

$$M(x)\leq\alpha\quad \mathrm{for}\quad x<\theta,\quad M(x)\geq\alpha\quad \mathrm{for}\quad x>\theta.\tag{5}$$

^d60757

此处我们暂不关心是否$M(\theta)=\alpha.$
令$\{a_{n}\}$为给定的正项级数使得

$$0<\sum_{1}^{\infty}a_{n}^{2}=A<\infty.\tag{6}$$
^f5acc1
 
接下来我们定义(非平稳的)马尔科夫链$\{x_{n}\}$, 令$x_{1}$为*任意*常数, 

$$x_{n+1}-x_{n}=a_{n}(\alpha-y_{n}),\tag{7}$$

^78dbce

其$y_{n}$为随机向量使得
$$Pr[y_{n}\leq y|x_n]=H(y|x_{n}).\tag{8}$$
令
$$b_{n}=E(x_{n}-\theta)^{2}.\tag{9}$$
我们将证明

$$\lim\limits_{n\rightarrow\infty}b_{n}=0\tag{10}$$

^3bce15

在任意初始值$x_1$的条件下均成立. 而 [[#^3bce15|(10)]]可以推出$x_{n}$依概率收敛到$\theta$.
由[[#^78dbce|(7)]]可知

$$\begin{equation} \begin{aligned}
b_{n+1}
&=E(x_{n+1}-\theta)^{2}=E[E[(x_{n+1}-\theta)^2]|x_{n}]=E\left[E\left[\{(x_{n}-\theta)+a_{n}(\alpha-y_{n})\}^{2}\right]|x_{n}\right]
\\&
=E\left[\int_{-\infty}^{\infty}\{(x_{n}-\theta)-a_{n}(y-\alpha)\}^{2}\mathrm{d}H(y|x_{n})\right]
\\&
=b_{n}+a_{n}^{2}E\left[\int_{-\infty}^{\infty}(y-\alpha)^{2}\mathrm{d}H(y|x_{n})\right]-2a_{n}E[(x_{n}-\theta)(M(x_{n})-\alpha)]
\end{aligned}\end{equation}\tag{11}$$

^9e7a9e

令

$$d_{n}=E[(x_{n}-\theta)(M(x)-\alpha)]\tag{12},$$

$$e_{n}=E\left[\int_{-\infty}^{\infty}(y-\alpha)^{2}\mathrm{d}H(y|x_{n})\right]\tag{13},$$
则由[[#^9e7a9e|(11)]]

$$b_{n+1}-b_{n}=a_{n}^{2}e_{n}-2a_{n}d_{n}\tag{14}$$

^d0e95a

由[[#^d60757|(5)]]可知$$d_{n}\ge0,$$由[[#^215f5e|(4)]]可知$$0\leq e_n\leq[C+\lvert\alpha\rvert]^{2}<\infty.$$
结合[[#^f5acc1|(6)]]可知正项级数$\sum_{1}^{\infty}a_{n}^{2}e_{n}$收敛.
累加[[#^d0e95a|(14)]]式可得

$$b_{n+1}=b_{1}+\sum_{j=1}^{n}a_{j}^{2}e_{j}-2\sum_{j=1}^{n}a_{j}d_{j}\tag{15}$$
^c33471

因为$b_{n+1}\geq 0$, 从而
$$\sum_{j=1}^{n}a_{j}d_{j}\leq \frac{1}{2}\left[b_1+\sum_{j=1}^{n}a_{j}^{2}e_{j}\right]<\infty.\tag{16}$$
令$n\rightarrow\infty$可知正项级数

$$\sum_{1}^{\infty}a_{n}d_{n}\tag{17}$$
^f7b098

收敛, 令[[#^c33471|(15)]]中$n\rightarrow\infty$

$$\lim_{n\rightarrow\infty}b_{n}=b_{1}+\sum_{1}^{\infty}a_{n}^{2}e_{n}-2\sum_{i}^{\infty}a_{n}d_{n}=b\tag{18}$$
存在; $b\geq 0$.
我们认为存在(稍后证明其存在性)一个非负数列$\{k_{n}\}$使得

$$d_{n}\geq k_{n}b_{n},\qquad\sum_{1}^{\infty}a_{n}k_{n}=\infty\tag{19}$$
^506088

由[[#^f7b098|(17)]]的收敛性及[[#^506088|(19)]]的前半部分可知

$$\sum_{1}^{\infty}a_{n}k_{n}b_{n}<\infty\tag{20}$$

^891731

由[[#^506088|(19)]]的后半部分及[[#^891731|(20)]]可知, 对任意$\epsilon>0$, 必定存在无限多项$b_{n}<\epsilon$. 我们已知数列$\{b_{n}\}$的极限存在, 故$b=\lim_{n\rightarrow\infty} b_{n}=0$. 因此我们证明了引理: 
**Lemma 1.** 如果存在非负数列$\{k_{n}\}$满足式[[#^506088|(19)]], 那么$b=0$.
## Lemma 2.
令

$$A_{n}=\lvert x_{1}-\theta\rvert+[C+\lvert\alpha\rvert](a_{1}+a_{2}+\cdots+a_{n-1});\tag{21}$$
那么由[[#^215f5e|(4)]]和[[#^78dbce|(7)]]可得

$$Pr[\lvert x_{n}-\theta\rvert\le A_{n}]=1.\tag{22}$$
设

$$\overline{k}_{n}=\inf\left[\frac{M(x)-\alpha}{x-\theta}\right]\quad\mathrm{for}\quad 0<\lvert x-\theta\rvert\leq A_{n}\tag{23}$$

^6c8dc9

由[[#^d60757|(5)]]可知$\overline{k}_{n}\geq 0$. 用$P_{n}(x)$表示$x_{n}$的概率分布函数, 有

$$d_{n}=\int_{\lvert x-\theta\rvert\leq A_n}(x-\theta)(M(x)-\alpha)\mathrm{d}P_{n}(x)\geq\int_{\lvert x-\theta\rvert\leq A_n}\overline{k}_{n}\lvert x-\theta\rvert^{2}\mathrm{d}P_{n}(x)=\overline{k}_{n}b_{n}\tag{24}$$
我们证明了由[[#^6c8dc9|(23)]]定义的$\overline{k}_{n}$满足[[#^506088|(19)]]的前半部分, 为了证明后半部分我们作出如下假设

$$\overline{k}_{n}\geq\frac{K}{A_{n}}\tag{25}$$
^f50630

对某个常数$K$以及足够大的$n$成立, 并且有(稍后证明这样的$K$和$a_{n}$存在)

$$\sum_{n=2}^\infty\frac{a_{n}}{(a_{1}+\cdots+a_{n-1})}=\infty.\tag{26}$$
 ^248cbe

从[[#^248cbe|(26)]]可知
$$\sum_{1}^{\infty}a_{n}=\infty,\tag{27}$$
因此对于足够大的$n$
$$2[C+\lvert\alpha\rvert](a_{1}+\cdots+a_{n-1})\geq A_{n}.\tag{28}$$
由[[#^f50630|(25)]]我们可知对于足够大的n
$$a_{n}\overline{k}_{n}\geq a_{n}\frac{K}{A_{n}}\geq\frac{a_{n}K}{2[C+\lvert\alpha\rvert](a_{1}+\cdots+a_{n-1})},\tag{29}$$
^4da8ad

由[[#^248cbe|(26)]]及[[#^4da8ad|(29)]]可证明[[#^506088|(19)]]的后半部分.

**Lemma 2.** 如果[[#^f50630|(25)]]和[[#^248cbe|(26)]]成立, 那么$b=0$.
^db60ec

如此，问题变为了寻找满足[[#^f50630|(25)]]和[[#^248cbe|(26)]]的$K$和$a_{n}$.
对于满足[[#^f5acc1|(6)]]和[[#^248cbe|(26)]]的数列, 我们有一个非常熟悉的数列$a_{n}=1/n$, 因为
$$\sum_{1}^{\infty} \frac{1}{n^2}=\frac{\pi^{2}}{6},\quad\sum_{n=2}^{\infty}\left[\frac{1}{n\left(1+ \frac{1}{2}+\cdots+ \frac{1}{n-1}\right)}\right]=\infty$$
更一般的, 对任何数列$\{a_{n}\}$, 存在两个正常数$c^{\prime},c^{\prime\prime}$满足
$$\frac{c^{\prime}}{n}\leq a_{n}\leq \frac{c^{\prime\prime}}{n}\tag{30}$$

^51a01f

也会满足[[#^f5acc1|(6)]]和[[#^248cbe|(26)]]. 我们把任何满足条件[[#^f5acc1|(6)]]和[[#^248cbe|(26)]]的数列称为*$1/n$型数列*, 无论其是否满足[[#^51a01f|(30)]]. 下面将寻找满足[[#^f50630|(25)]]的条件.
## Theorom 1.
如果$\{a_{n}\}$是$1/n$型数列, 那么将很容易找到满足[[#^d60757|(5)]]和[[#^f50630|(25)]]的$M(x)$(但这样的(5)还不足以证明[[#^f50630|(25)]]), 对于[[#^d60757|(5)]]的强化条件: 对某个$\delta>0$,
$$M(x)\le \alpha-\delta\quad\mathrm{for}\quad x<\theta,\quad M(x)\ge \alpha+\delta\quad\mathrm{for}\quad x>\theta\tag{5.1}$$
^e5c65d

那么对于$0<\lvert x-\theta\rvert\le A_{n}$, 有
$$\frac{M(x)-\alpha}{x-\theta}\ge \frac{\delta}{A_{n}},\tag{31}$$
从而
$$\overline{k}_{n}\ge \frac{\delta}{A_{n}},\tag{32}$$
即[[#^f50630|(25)]]中$K=\delta$, 再由[[#^db60ec|Lemma 2.]], 我们可以总结出
**Theorom 1.** 如果$\{a_{n}\}$是$1/n$型数列, 且[[#^215f5e|(4)]]成立, 如果$M(x)$满足[[#^e5c65d|(5.1)]], 那么$b=0$.
## Theorom 2.
我们关注$M(x)$可以满足[[#^f50630|(25)]]的另一种情况

$$M(x)\ \mathrm{is\ nondecreasing,}\tag{33}$$

^32d8c7

$$M(\theta)=\alpha,\tag{34}$$

^3e36e4

$$M^{\prime}(\theta)>0.\tag{35}$$

^0e108a

我们讲证明[[#^f50630|(25)]]在$M(X)$满足以上情况下成立.由[[#^3e36e4|(34)]], 可知
$$M(x)-\alpha=(x-\theta)[M^{\prime}(\theta)+\epsilon(x-\theta)],\tag{36}$$
其中$\epsilon(t)$是满足如下条件的方程
$$\lim\limits_{t\rightarrow\infty}\epsilon(t)=0.\tag{37}$$
因此存在常数$\delta>0$使得
$$
\epsilon(t)\ge - \frac{1}{2}M^{\prime}(\theta) \quad \mathrm{for}\quad \lvert t\rvert\le\delta\tag{38}
$$
从而

$$\frac{M(x)-\alpha}{x-\theta}\ge \frac{1}{2}M^{\prime}(\theta)>0\quad \mathrm{for}\quad \lvert x-\theta\rvert\le\delta\tag{39}$$

^74a3d4

另外, 对于$\theta+\delta\le x\le \theta+A_{n}$, 因为$M(x)$是非降函数,

$$\frac{M(x)-\alpha}{x-\theta}\ge \frac{M(\theta+\delta)-\alpha}{A_{n}}\ge\frac{\delta M^{\prime}(\theta)}{2A_{n}},\tag{40}$$

^e348a3

而另一边, 对于$\theta-A_{n}\le x\le\theta-\delta$,

$$\frac{M(x)-\alpha}{x-\theta}=\frac{\alpha-M(x)}{\theta-x}\ge \frac{\alpha-M(\theta-\delta)}{A_{n}}\ge\frac{\delta M^{\prime}(\theta)}{2A_{n}}.\tag{41}$$

^42a100


不失一般性, 认为$\delta/A_{n}\le 1$, 由[[#^74a3d4|(39)]], [[#^e348a3|(40)]]及[[#^42a100|(41)]], 可知
$$\frac{M(x)-\alpha}{x-\theta}\ge \frac{\delta M^{\prime}(\theta)}{2A_n}>0\quad \mathrm{for}\quad 0<\lvert x-\theta\rvert\le A_{n},\tag{42}$$
即[[#^f50630|(25)]]中$K=\delta M^{\prime}(\theta)/2>0$, 我们可以总结出
**Theorom 2.** 如果$\{a_{n}\}$是$1/n$型数列, 且[[#^215f5e|(4)]]成立, 如果$M(x)$满足[[#^32d8c7|(33)]], [[#^3e36e4|(34)]]和[[#^0e108a|(35)]], 那么$b=0$.

[^1]: Robbins, H. & Monro, S. A Stochastic Approximation Method. _The Annals of Mathematical Statistics_ **22**, 400–407 (1951). 
