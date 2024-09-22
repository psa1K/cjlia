# 6
>[!note] 
>假设随机向量$(X,Y)^{\prime}$服从二元正态分布,即$$\begin{pmatrix}  X\\Y\end{pmatrix}\sim N_{2}\begin{pmatrix} \begin{pmatrix} \mu_{1}\\ \mu_{2}\end{pmatrix},\begin{pmatrix} \sigma^{2}_{1}& \rho \sigma_{1} \sigma_{2}\\\rho \sigma_{1}\sigma_{2}&\sigma^{2}_{2}\end{pmatrix} \end{pmatrix}$$.
>记$(x_{1},y_{1})^{\prime},\cdots,(x_{m},y_{m})^{\prime}$为来自该二元正态分布的容量为$m$的一组的独立同分布随机样本.此外,额外观测了来自总体$X\sim N(\mu_{1},\sigma^{2}_{1})$容量为$n-m$的一组独立同分布随机样本$x_{m+1},\cdots,x_{n}$,其中$n>m$.试给出所有未知参数的极大似然估计.

$$
\begin{equation} \begin{aligned}
&Sol.已知,g(x)=\frac{1}{\sqrt{2\pi}\sigma^{2}_{1}}\exp\left\{-\frac{(x-\mu_{1})^{2}}{2\sigma^{2}_{1}}\right\},
\\&
f(x, y) = \frac{1}{2 \pi \sigma_{1} \sigma_{2} \sqrt{1 - \rho^2}} \exp \left\{ -\frac{1}{2(1 - \rho^{2})} \left( \frac{(x - \mu_{1})^{2}}{\sigma_{1}^{2}} + \frac{(y - \mu_{2})^{2}}{\sigma_{2}^{2}} - \frac{2 \rho (x - \mu_{1})(y - \mu_{2})}{\sigma_{1} \sigma_{2}} \right) \right\}.
\\&
则似然函数为\ln L_{1}=\ln(\sum^{n}_{i=m+1}g(x_{i}))=-\frac{n-m}{2}\ln(2\pi)-\frac{n-m}{2}\ln(\sigma^{2}_{1})-\frac{1}{2\sigma^{2}_{1}}\sum^{n}_{i=m+1}(x_i-\mu_1)^{2},
\\&
\ln L_2 = -m\ln (2 \pi) - \frac{m}{2} \ln (\sigma_{1}^{2} \sigma_{2}^{2} (1 - \rho^{2}))
\\&
-\frac{1}{2(1 - \rho^{2})} \sum_{i=1 }^{m} \left( \frac{(x_{i} - \mu_{1})^2}{\sigma_{1}^{2}} + \frac{(y_{i} - \mu_{2})^{2}}{\sigma_{2}^{2}} - \frac{2 \rho (x_{i} - \mu_{1})(y_{i} - \mu_{2})}{\sigma_1 \sigma_{2}} \right).
\\&
有\ln L = \ln L_{1} + \ln L_{2},
\\&
联立\left\{ \begin{array}{rcl}\frac{\partial\ln L}{\partial\mu_{1} } =\frac{1}{1 - \rho^2} \sum\limits_{i=1}^{m} \left( \frac{x_i - \mu_1}{\sigma_1^2} - \frac{\rho (y_i - \mu_2)}{\sigma_1 \sigma_2} \right) +  \sum\limits_{i=m+1}^{n}\frac{(x_i - \mu_1)}{\sigma_{1}^{2}} =0 &(1)\\ \frac{\partial\ln L}{\partial\mu_{2} } =\frac{1}{1 - \rho^{2}} \sum\limits_{i=1}^{m} \left( \frac{y_i - \mu_2}{\sigma_2^2} - \frac{\rho (x_i - \mu_1)}{\sigma_1 \sigma_2} \right)=0 &(2)\\ \frac{\partial\ln L}{\partial\sigma^{2}_{1} } =-\frac{n}{2 \sigma_1^2} + \frac{1}{2(1 - \rho^2)} \sum\limits_{i=1}^{m} \left( \frac{(x_i - \mu_1)^2}{\sigma_1^4} - \frac{ \rho (x_i - \mu_1)(y_i - \mu_2)}{\sigma_1^3 \sigma_2} \right) + \frac{1}{2 \sigma_1^4} \sum\limits_{i=m+1}^{n} (x_i - \mu_1)^2=0&(3)\\\frac{\partial\ln L}{\partial\sigma^{2}_{2} } =-\frac{m}{2 \sigma_2^2} + \frac{1}{2(1 - \rho^2)} \sum\limits_{i=1}^{m} \left( \frac{(y_i - \mu_2)^2}{\sigma_2^4} - \frac{ \rho (x_i - \mu_1)(y_i - \mu_2)}{\sigma_1 \sigma_2^3} \right)=0&(4)\\\frac{\partial\ln L}{\partial\rho }= \frac{m \rho}{1 - \rho^2}-\frac{\rho}{(1-\rho^2)^2}\left(\sum\limits^m_{i=1}\left(\frac{(x_i-\mu_1)^2}{\sigma^2_1}+\frac{(y_i-\mu_2)^2}{\sigma^2_2}\right)\right) - \frac{1+\rho^2}{(1 - \rho^2)^2} \sum\limits_{i=1}^{m} \left( \frac{(x_i - \mu_1)(y_i - \mu_2)}{\sigma_1 \sigma_2} \right)=0&(5)\end{array}\right.
\\&
(2)\Rightarrow \sum\limits_{i=1}^{m}\frac{\rho (x_i - \mu_1)}{\sigma_1 \sigma_2}=\sum\limits_{i=1}^{m}  \frac{y_i - \mu_2}{\sigma_2^2}代入(1)可得\hat{\mu}_{1}=\frac{1}{n}\sum^{n}_{i=1}x_1,
\end{aligned}\end{equation}
$$


# 7
>[!note] 
>假设从该二元正态总体$N_{2}(\mu,\mathbf{\Sigma})$中随机产生$n$个模拟样本，其中$$\mu=\begin{pmatrix} 1\\2 \end{pmatrix},\Sigma=\begin{pmatrix} \sigma^{2}_{1}& \rho \sigma_{1} \sigma_{2}\\\rho \sigma_{1}\sigma_{2}&\sigma^{2}_{2}\end{pmatrix}$$,
>且$\sigma_{1}=1,\sigma_{2}=2,\rho=0.6.$针对不同的样本量$n=50,100,200,$重复模拟$1000$次.
>(1)试计算参数$\mu_{1},\mu_{2},\sigma_{1},\sigma_{2}$和$\rho$估计的平均值、偏差和标准差,并通过$\mathrm{QQ}$图和直方图展示估计的好坏.进一步,随着样本量的变化,说明结果有什么变化;
>(2)基于式子$(5.41)$和$(5.42)$编写程序,分别计算相关系数$\rho$的$95\%$的平均置信区间和区间长度,并进行比较哪个置信区间最优.进一步,随着样本量的变化,平均区间长度有什么变化.

$$
\begin{equation} \begin{aligned}
Sol.&(1)利用MLE,可知\hat{\mu}=\overline{x},\hat{\mathbf{\Sigma}}=\mathbf{V}/n,\hat{\rho}=\frac{\sum\limits^{n}_{i=1}(x_{i1}-\overline{x}_{1})(x_{i2}-\overline{x}_{2})}{\sqrt{\sum\limits^{n}_{i=1}(x_{i1}-\overline{x}_{1})^2\sum\limits^{n}_{i=1}(x_{i2}-\overline{x}_{2})^2}},
\\&
其中\overline{x}=\begin{pmatrix} \overline{x}_{1}\\\overline{x}_{2} \end{pmatrix}=\begin{pmatrix} \frac{1}{n}\sum\limits^{n}_{i=1}x_{i1}\\ \frac{1}{n}\sum\limits^{n}_{i=1}x_{i2}\end{pmatrix},\mathbf{V}=\begin{pmatrix}  \sum\limits^{n}_{i=1}(x_{i1}-\overline{x}_{1})^2&\sum\limits^{n}_{i=1}(x_{i1}-\overline{x}_{1})(x_{i2}-\overline{x}_{2})\\\sum\limits^{n}_{i=1}(x_{i2}-\overline{x}_{2})(x_{i1}-\overline{x}_{1})&\sum\limits^{n}_{i=1}(x_{i2}-\overline{x}_{2})^2\end{pmatrix}.
\\&
\\
&(2)(5.41)与(5.42)置信区间分别为\left[r(n)-\frac{1-r^{2}(n)}{\sqrt{n}}z_{1-\alpha/2},r(n)+\frac{1-r^{2}(n)}{\sqrt{n}}z_{1-\alpha/2}\right],
\\&
\left[\frac{1}{2}\ln{\frac{1+r(n)}{1-r(n)}-\frac{1}{\sqrt{n}}z_{1-\alpha/2}},\frac{1}{2}\ln{\frac{1+r(n)}{1-r(n)}+\frac{1}{\sqrt{n}}z_{1-\alpha/2}}\right].
\\&
其中z_{1-\alpha/2}为标准正态分布的上\alpha/2分位点.
\end{aligned}\end{equation}
$$

# 9
>[!note] 
>假设$x_1,\cdots,x_n$为来自$0-1$分布的独立同分布的简单随机样本，其分布律为$\mathrm{Pr}(x_{1}=1)=p,\mathrm{Pr}(x_{1}=0)=1-p$,其中$0<p<1$.根据中心极限定理,有$\sqrt{n}(\overline{x}-p)\stackrel{d}{\longrightarrow}N(0,p(1-p))$,其中$\overline{x}=\frac{1}{n}\displaystyle\sum^n_{i=1}x_{i}$.
>(1)试用$\mathrm{Fisher}\ Z$变换方法构造$p$的置信水平为$1-\alpha$的置信区间;
>(2)取$p=0.6$,从$0-1$分布中随机产生样本量$n=50,100,200$的随机数,重复1000次试验,编写程序,计算$p$的$95\%$的平均置信区间和区间长度,并观察随着样本量的变化,平均区间长度有什么变化.

$$
\begin{equation} \begin{aligned}
Sol.&(1)
由\mathbf{Fisher}Z变换方法,\sqrt{n}(\overline{x}-p)\stackrel{d}{\longrightarrow}N(0,p(1-p))只需让(f^{\prime}(p))^{2}p(1-p)=1即可.
\\&
\mathrm{d}f=\frac{1}{\sqrt{p(1-p)}}{\mathrm{d}p},f(p)=\int\frac{1}{\sqrt{p(1-p)}}{\mathrm{d}p}\xlongequal[]{令p=\sin^{2}y}\int\frac{2\cos y\sin y}{\sin y\cos y}dy=2y=\arcsin(\sqrt{p})
\\&
故\sqrt{n}\left[\arcsin(\sqrt{\overline{x}})-\arcsin(\sqrt{p})\right]\stackrel{d}{\longrightarrow}N(0,1),从而p的置信水平为1-\alpha的置信区间为:
\\&
\left(\left[\sin\left(\arcsin(\overline{x})-\frac{z_{1-\alpha}}{\sqrt{n}}\right)\right]^2,\left[\sin\left(\arcsin(\overline{x})+\frac{z_{1-\alpha}}{\sqrt{n}}\right)\right]^2\right).
\end{aligned}\end{equation}
$$

# 11
>[!note] 
>设$\mathbf{X}$和$\mathbf{Y}$是相互独立的随机向量,且$\mathbf{X}\sim N_{p}(\mu_{1},\mathbf{\Sigma}),\mathbf{Y}\sim N_{p}(\mu_{2},\mathbf{\Sigma})$,其中$\mathbf{\Sigma}>0$.进一步假设$x_{1},\cdots,x_{n}$为来自总体$\mathbf{X}$的独立同分布的随机样本,$y_{1},\cdots,y_{m}$为来自总体$\mathbf{Y}$的独立同分布的随机样本,$n,m>p$.
>(1)试证明参数$(\mu_{1},\mu_{2},\mathbf{\Sigma})$的充分完备统计量为$(\overline{x},\overline{y},\mathbf{V}_{1}+\mathbf{V}_{2})$,其中$$\mathbf{V}_{1}=\sum^{n}_{i=1}(x_{i}-\overline{x})(x_{i}-\overline{x})^{\prime},\mathbf{V}_2=\sum^{m}_{i=1}(y_{i}-\overline{y})(y_{i}-\overline{y})^{\prime}$$;
>(2)试求参数$(\mu_{1},\mu_{2},\mathbf{\Sigma})$的极大似然估计,他们是无偏估计吗?
>(3)试求参数$(\mu_{1},\mu_{2},\mathbf{\Sigma})$的已知最小协方差矩阵无偏估计，它们是不是唯一存在的？
>(4)$\Delta^{2}=(\mu_{1}-\mu_{2})^{\prime}\mathbf{\Sigma}^{-1}(\mu_{1}-\mu_{2})$通常用来表示两个正态分布$N_{p}(\mu_{1},\mathbf{\Sigma})$和$N_{p}(\mu_{2},\mathbf{\Sigma})$之间的距离,试求$\Delta^{2}$的极大似然估计,并且是无偏估计吗?若不是,请给出$\Delta^{2}$的无偏估计.

$$
\begin{equation} \begin{aligned}
(1)&Proof.f(x_1,\cdots,x_n,y_1,\cdots,y_m)=\left(\frac{1}{(2\pi)^{\frac{p}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{1}{2}}}\right)^n\exp\left\{-\frac{1}{2}\sum^{n}_{i=1}[(x_i-\mu_1)^{\prime}\mathbf{\Sigma}^{-1}(x_i-\mu_1)]\right\}
\\&
\cdot\left(\frac{1}{(2\pi)^{\frac{p}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{1}{2}}}\right)^m\exp\left\{-\frac{1}{2}\sum^{m}_{i=1}[(y_i-\mu_2)^{\prime}\mathbf{\Sigma}^{-1}(y_i-\mu_2)]\right\}
\\&
=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\exp\left\{-\frac{1}{2}\sum^{n}_{i=1}[(x_i-\mu_1)^{\prime}\mathbf{\Sigma}^{-1}(x_i-\mu_1)]-\frac{1}{2}\sum^{m}_{i=1}[(y_i-\mu_2)^{\prime}\mathbf{\Sigma}^{-1}(y_i-\mu_2)]\right\}
\\&
=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\mathrm{etr}\left\{-\frac{1}{2}\sum^{n}_{i=1}[(x_i-\mu_1)^{\prime}\mathbf{\Sigma}^{-1}(x_i-\mu_1)]-\frac{1}{2}\sum^{m}_{i=1}[(y_i-\mu_2)^{\prime}\mathbf{\Sigma}^{-1}(y_i-\mu_2)]\right\}
\\&
=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\mathrm{etr}\left\{-\frac{\mathbf{\Sigma}^{-1}}{2}\sum^{n}_{i=1}[(x_i-\mu_1)(x_i-\mu_1)^{\prime}]-\frac{\mathbf{\Sigma}^{-1}}{2}\sum^{m}_{i=1}[(y_i-\mu_2)(y_i-\mu_2)^{\prime}]\right\}
\\&
=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\mathrm{etr}\left\{-\frac{\mathbf{\Sigma}^{-1}}{2}\sum^{n}_{i=1}[(x_i-\overline{x})(x_i-\overline{x})^{\prime}+(\overline{x}-\mu_1)(\overline{x}-\mu_1)^{\prime}]\right\}
\\&
\cdot\mathrm{etr}\left\{-\frac{\mathbf{\Sigma}^{-1}}{2}\sum^{n}_{i=1}[(y_i-\overline{y})(y_i-\overline{y})^{\prime}+(\overline{y}-\mu_2)(\overline{y}-\mu_2)^{\prime}]\right\}
\\&
=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\mathrm{etr}\left\{-\frac{\mathbf{\Sigma}^{-1}}{2}(\mathbf{V}_{1}+\mathbf{V}_{2}+n(\overline{x}-\mu_1)(\overline{x}-\mu_1)^{\prime}+m(\overline{y}-\mu_2)(\overline{y}-\mu_2)^{\prime})\right\}
\\&
由\mathrm{Neyman-Fisher}因子判别法则可知(\mu_{1},\mu_{2},\mathbf{\Sigma})的充分完备统计量为(\overline{x},\overline{y},\mathbf{V}_{1}+\mathbf{V}_{2}).
\\
(2)&Sol.L=\frac{1}{(2\pi)^{\frac{p(m+n)}{2}} \lvert\mathbf{\Sigma}\rvert^{\frac{m+n}{2}}}\mathrm{etr}\left\{-\frac{\mathbf{\Sigma}^{-1}}{2}(\mathbf{V}_{1}+\mathbf{V}_{2})\right\}
\\&
\cdot\exp\left\{-\frac{n(\overline{x}-\mu_1)^{\prime}\mathbf{\Sigma}^{-1}(\overline{x}-\mu_1)+m(\overline{y}-\mu_2)^{\prime}\mathbf{\Sigma}^{-1}(\overline{y}-\mu_2))}{2}\right\}
\\&
\ln L=-\frac{p(m+n)}{2}\ln(2\pi)-\frac{m+n}{2}\ln\lvert\mathbf{\Sigma}\rvert-\frac{1}{2}\mathrm{tr}(\mathbf{\Sigma}^{-1}(\mathbf{V}_{1}+\mathbf{V}_{2}))
\\&
-\frac{n(\overline{x}-\mu_1)^{\prime}\mathbf{\Sigma}^{-1}(\overline{x}-\mu_1)+m(\overline{y}-\mu_2)^{\prime}\mathbf{\Sigma}^{-1}(\overline{y}-\mu_2))}{2}
\\&
注意\mathbf{\Sigma}>0,故当\hat{\mu}_{1}=\overline{x},\hat{\mu}_{2}=\overline{y},似然函数取得最大值，代入原式并去掉无关项后,
\\&
\ln L^{\prime}=-(m+n)\ln\lvert\mathbf{\Sigma}\rvert-\mathrm{tr}(\mathbf{\Sigma}^{-1}(\mathbf{V}_{1}+\mathbf{V}_{2}))=(m+n)\ln\lvert\mathbf{\Sigma}^{-1}\rvert-\mathrm{tr}(\mathbf{\Sigma}^{-1}(\mathbf{V}_{1}+\mathbf{V}_{2}))
\\&
令\frac{\partial\ln L^{\prime}}{\partial(\mathbf{\Sigma}^{-1})}=(m+n)\mathbf{\Sigma}-(\mathbf{V}_{1}+\mathbf{V}_{2})=0,可得\hat{\mathbf{\Sigma}}=\frac{\mathbf{V}_{1}+\mathbf{V}_{2}}{m+n},
\\&
E(\hat{\mu}_{1})=E(\overline{x})=\mu_{1},E(\hat{\mu}_{2})=E(\overline{y})=\mu_{2},E(\hat{\mathbf{\Sigma}})=\frac{m+n-2}{m+n}\mathbf{\Sigma},故\hat{\mu}_{1},\hat{\mu}_{2}为UE,\hat{\mathbf{\Sigma}}不是UE.
\\
(3)&由(1)(2)\hat{\mu}_{1},\hat{\mu}_{2},\frac{m+n}{m+n-2}\hat{\mathbf{\Sigma}}为UE,且为充分完备统计量的函数，故为UMVUE,是唯一的.
\\
(4)&\hat{\Delta}^2=(\hat{\mu}_{1}-\hat{\mu}_{2})^{\prime}\hat{\mathbf{\Sigma}}^{-1}(\hat{\mu}_{1}-\hat{\mu}_{2})=(\overline{x}-\overline{y})^{\prime}\left(\frac{\mathbf{V}_{1}+\mathbf{V}_{2}}{m+n}\right)^{-1}(\overline{x}-\overline{y}),
\\&
又\overline{x}\sim N_{p}(\mu_{1},\mathbf{\Sigma}/n),\overline{y}\sim N_{p}(\mu_{2},\mathbf{\Sigma}/n),\hat{\mathbf{\Sigma}}\sim W_p(m+n-2,\mathbf{\Sigma}),
\\&
又\overline{x}与\overline{y}独立,有\overline{x}-\overline{y}\sim N_{p}(\mu_{1}-\mu_{2},2\mathbf{\Sigma}/n),又\overline{x}-\overline{y}与\hat{\mathbf{\Sigma}}独立,
\\&
E(\hat{\Delta}^2)=E[(\hat{\mu}_{1}-\hat{\mu}_{2})^{\prime}\hat{\mathbf{\Sigma}}^{-1}(\hat{\mu}_{1}-\hat{\mu}_{2})]\cdot(m+n)=(m+n)(\mu_{1},\mu_{2})^{\prime}\cdot\frac{\Sigma^{-1}}{m+n-2-p-1}(\mu_{1},\mu_{2})
\\&
故\Delta^{2的}一个UE为(m+n-3-p)(\overline{x}-\overline{y})^{\prime}\left(\mathbf{V}_{1}+\mathbf{V}_{2}\right)^{-1}(\overline{x}-\overline{y}).
\end{aligned}\end{equation}

$$

