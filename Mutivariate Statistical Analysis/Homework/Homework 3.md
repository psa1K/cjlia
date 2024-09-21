# 6
>[!note] 
>假设随机向量$(X,y)^{\prime}$服从二元正态分布,即$$\begin{pmatrix}  X\\Y\end{pmatrix}\sim N_{2}\begin{pmatrix} \begin{pmatrix} \mu_{1}\\ \mu_{2}\end{pmatrix},\begin{pmatrix} \sigma^{2}_{1}& \rho \sigma_{1} \sigma_{2}\\\rho \sigma_{1}\sigma_{2}&\sigma^{2}_{2}\end{pmatrix} \end{pmatrix}$$.
>记$(x_{1},y_{1})^{\prime},\cdots,(x_{m},y_{m})^{\prime}$为来自该二元正态分布的容量为$m$的一组的独立同分布随机样本.此外,额外观测了来自总体$X\sim N(\mu_{1},\sigma^{2}_{1})$容量为$n-m$的一组独立同分布随机样本$x_{m+1},\cdots,x_{n}$,其中$n>m$.试给出所有未知参数的极大似然估计.

# 7
>[!note] 
>假设从该二元正态总体$N_{2}(\mu,\mathbf{\Sigma})$中随机产生$n$个模拟样本，其中$$\mu=\begin{pmatrix} 1\\2 \end{pmatrix},\Sigma=\begin{pmatrix} \sigma^{2}_{1}& \rho \sigma_{1} \sigma_{2}\\\rho \sigma_{1}\sigma_{2}&\sigma^{2}_{2}\end{pmatrix}$$,
>且$\sigma_{1}=1,\sigma_{2}=2\rho=0.6.$针对不同的样本量$n=50,100,200,$重复模拟$1000$次.
>(1)试计算参数$\mu_{1},\mu_{2},\sigma_{1},\sigma_{2}$和$\rho$估计的平均值、偏差和标准差,并通过$\mathrm{QQ}$图和直方图展示估计的好坏.进一步,随着样本量的变化,说明结果有什么变化;
>(2)基于式子$(5.41)$和$(5.42)$编写程序,分别计算相关系数$\rho$的$95\%$的平均置信区间和区间长度,并进行比较哪个置信区间最优.进一步,随着样本量的变化,平均区间长度有什么变化.

# 9
>[!note] 
>假设$x_1,\cdots,x_n$为来自$0-1$分布的独立同分布的简单随机样本，其分布律为$\mathrm{Pr}(x_{1}=1)=p,\mathrm{Pr}(x_{1}=0)=1-p$,其中$0<p<1$.根据中心极限定理,有$\sqrt{n}(\overline{x}-p)\stackrel{d}{\longrightarrow}N{0,p(1-p)}$,其中$\overline{x}=\frac{1}{n}\displaystyle\sum^n_{i=1}x_{i}$.
>(1)试用$\mathrm{Fisher}\ Z$变换方法构造$p$的置信水平为$1-\alpha$的置信区间;
>(2)取$p=0.6$,从$0-1$分布中随机产生样本量$n=50,100,200$的随机数,重复1000次试验,编写程序,计算$p$的$95\%$的平均置信区间和区间长度,并观察随着样本量的变化,平均区间长度有什么变化.

# 11
>[!note] 
>设$\mathbf{X}$和$\mathbf{Y}$是相互独立的随机向量,且$\mathbf{X}\sim N_{p}(mu_{1},\Sigma),\mathbf{Y}\sim N_{p}(\mu_{2},\Sigma)$,其中$\Sigma>0$.进一步假设$x_{1},\cdots,x_{n}$为来自总体$\mathbf{X}$的独立同分布的随机样本,$y_{1},\cdots,y_{m}$为来自总体$\mathbf{Y}$的独立同分布的随机样本,$n,m>p$.
>(1)试证明参数$(\mu_{1},\mu_{2},\Sigma)$的充分完备统计量为$(\overline{x},\overline{y},\mathbf{V}_{1}+\mathbf{V}_{2})$,其中$$\mathbf{V}_{1}=\sum^{n}_{i=1}(x_{i}-\overline{x})(x_{i}-\overline{x})^{\prime},\mathbf{V}_2=\sum^{n}_{i=1}(y_{i}-\overline{y})(y_{i}-\overline{y})^{\prime}$$;
>(2)试求参数$(\mu_{1},\mu_{2},\Sigma)$的极大似然估计,他们是无偏估计吗?
>(3)试求参数$(\mu_{1},\mu_{2},\Sigma)$的已知最小协方差矩阵无偏估计，它们是不是唯一存在的？
>(4)$\Delta^{2}=(\mu_{1}-\mu_{2})^{\prime}\Sigma^{-1}(\mu_{1}-\mu_{2})$通常用来表示两个正态分布$N_{p}(\mu_{1},\Sigma)$和$N_{p}(\mu_{2},\Sigma)$之间的距离,试求$\Delta^{2}$的极大似然估计,并且是无偏估计吗?若不是,请给出$\Delta^{2}$的无偏估计.