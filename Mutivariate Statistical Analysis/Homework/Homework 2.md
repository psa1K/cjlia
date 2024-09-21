# 习题4
## 4
>[!note] 
>设$\textbf{W}\sim W_p(n,\mathbf{\Sigma})$,并令$\textbf{W}=(w_{ij})$和$\mathbf{\Sigma}=(\mathbf{\Sigma}_{ij})$,其中$i,j=1,\cdots,p$.
>(1)试证明:$w_{ii}\sim \mathbf{\Sigma}_{ii}\chi^{2}_{n}$,$i=1,\cdots,p$;
>(2)试计算:$E(w_{ij})$和$\mathrm{Cov}(w_{ij},w_{kl})$.提示:$\mathrm{Cov}(w_{ij},w_{kl})=n(\mathbf{\Sigma}_{ik}\mathbf{\Sigma}_{jl}+\mathbf{\Sigma}_{il}\mathbf{\Sigma}_{jk})$.

$$
\begin{equation} \begin{aligned}
(1)&Proof.令\mathbf{I}_n=(e_1,\cdots,e_n),
由性质4.2.2可知，
e^{\prime}_{i}\mathbf{W}e_{i}\sim W_{1}(n,e^{\prime}_i\mathbf{\Sigma} e_{i}),
\\&
又w_{ii}=e^{\prime}_{i}\mathbf{W}e_{i},\mathbf{\Sigma}_{ii}=e^{\prime}_{i}\mathbf{\Sigma} e_{i},
则w_{ii}\sim W_1(n,\mathbf{\Sigma}_{ii})\sim\mathbf{\Sigma}_{ii}\chi^{2}_{n}.
\\
(2)&Sol.E(w_{ij})=E(\mathbf{W})_{ij}=E(\textstyle\sum^{n}_{l=1}X_{l}X^{\prime}_{l})_{ij}=n\cdot E(X_{i}X^{\prime}_{i})_{ij}=n\cdot\mathrm{Cov}(X_i)_{ij}=n\cdot\mathbf{\Sigma}_{ij}=n\cdot \mathbf{\Sigma}_{ij}.
\\&
注意到\mathrm{Cov}(w_{ij},w_{kl})=\mathrm{Cov}(\mathrm{Vec}(\mathbf{W}))_{i+p(j-1),k+p(l-1)} ,(\mathbf{\Sigma}\otimes\mathbf{\Sigma})_{i+p(j-1),k+p(l-1)}
\\&
=(\mathbf{\Sigma}_{jl}\mathbf{\Sigma})_{ik}=\mathbf{\Sigma}_{ik}\mathbf{\Sigma}_{jl},
(\mathbf{K}_{p}(\mathbf{\Sigma}\otimes\mathbf{\Sigma}))_{i+p(j-1),k+p(l-1)}=(\textstyle\sum^{p}_{t=1}\mathbf{E}_{tj}\cdot\mathbf{\Sigma}_{tl}\mathbf{\Sigma})_{ik}(注意t=j时不为0)
\\&
=\mathbf{\Sigma}_{il}(\mathbf{E}_{ij}\mathbf{\Sigma})_{ik}=\mathbf{\Sigma}_{il}\mathbf{\Sigma}_{jk},其中\mathbf{E}_{ij}=e_{i}e^{\prime}_j.
\\&
因此只需证明\mathrm{Cov}(\mathrm{Vec}(\mathbf{W}))=n(\mathbf{I}_{p^2}+\mathbf{K}_{p})(\mathbf{\Sigma}\otimes\mathbf{\Sigma})即可,其中\mathbf{K}_{p}=\textstyle\sum^{p}_{i=1}\sum^{p}_{j=1}(\mathbf{E}_{ij}\otimes \mathbf{E}^{\prime}_{ij})
\\&
Lemma1:令u\sim N_p(0,\mathbf{I}_{p})，则E(uu^{\prime}\otimes uu^{\prime})=\mathbf{I}_{p^2}+\mathbf{K}_p+\mathrm{Vec}(\mathbf{I})\mathrm{Vec}(\mathbf{I})^{\prime},E(u \otimes u)=\mathrm{Vec}(\mathbf{I}_{p}),
\\&
\qquad\qquad\quad\mathrm{Cov}(u \otimes u)=\mathbf{I}_{p^2}+\mathbf{K}_p.
\\&
Proof:令\mathbf{T}_{ij}=\mathbf{E}_{ij}+\mathbf{E}_{ji},已知E(u_i)=E(u^3_i)=E(u^5_i)=0,E(u^2_i)=1，E(u^4_i)=3，E(u^6_i)=15.
\\&
\quad\quad\quad\ \ 则E(u_{i}u_{j}uu^{\prime})=\mathbf{T}_ij+\delta_{ij}\mathbf{I}_p,其中\delta_{ij}为\mathbf{Kronecker}记号.
\\&
\quad\quad\quad\ \ 则E(uu^{\prime}\otimes uu^{\prime})=\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes(t_{ij}+\delta_{ij}\mathbf{I}_p))=\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes \mathbf{T}_{ij})+\textstyle\sum_{ij}(\delta_{ij}\mathbf{E}_{ij}\otimes \mathbf{I}_p)
\\&
\quad\quad\quad\ \ =\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes \mathbf{E}_{ij})+\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes \mathbf{E}_{ji})+\textstyle\sum_{ii}(\delta_{ii}\mathbf{E}_{ii}\otimes \mathbf{I}_p).
\\&
\quad\quad\quad\ \ 其中,\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes \mathbf{E}_{ij})=\textstyle\sum_{ij}(\mathrm{Vec}(\mathbf{E}_{ii})\mathrm{Vec}(\mathbf{E}_{jj})^{\prime})=\mathrm{Vec}(\mathbf{I}_p)\mathrm{Vec}(\mathbf{I}_p)^{\prime},
\\&
\quad\quad\quad\ \ 由定义,\textstyle\sum_{ij}(\mathbf{E}_{ij}\otimes \mathbf{E}_{ji})=\mathbf{K}_p,\textstyle\sum_{ii}(\delta_{ii}\mathbf{E}_{ii}\otimes \mathbf{I}_p)=\mathbf{I}_{p}\otimes \mathbf{I}_{p}=\mathbf{I}_{p^2};
\\&
\quad\quad\quad\ \ E(u \otimes u)=E(\mathrm{Vec}(uu\prime))=\mathrm{Vec}(E(uu\prime))=\mathrm{Vec}(\mathbf{I}_p);
\\&
\quad\quad\quad\ \ \mathrm{Cov} (u\otimes u)=E(uu^{\prime}\otimes uu^{\prime})-\mathrm{Vec}(\mathbf{I}_p)\mathrm{Vec}(\mathbf{I}_p)^{\prime}
\\&
\quad\quad\quad\ \ =\mathbf{I}_{p^2}+\mathbf{K}_p+\mathrm{Vec}(\mathbf{I}_p)\mathrm{Vec}(\mathbf{I}_p)^{\prime}-\mathrm{Vec}(\mathbf{I}_p)\mathrm{Vec}(\mathbf{I}_p)^{\prime}=\mathbf{I}_{p^2}+\mathbf{K}_p.
\\&
\mathrm{Cov}(\mathrm{Vec}(\mathbf{W}))=\mathrm{Cov}(\mathrm{Vec}(\textstyle\sum^{n}_{i=1}X_{i}X^{\prime}_{i}))=\textstyle\sum^{n}_{i=1}\mathrm{Cov}(\mathrm{Vec}(X_{i}X^{\prime}_{i}))=\textstyle\sum^{n}_{i=1}\mathrm{Cov}(X_{i}\otimes X_{i})
\\&
=n\mathrm{Cov}((\mathbf{\Sigma}^{\frac{1}{2}}u)\otimes(\mathbf{\Sigma}^{\frac{1}{2}}u))=n \mathrm{Cov}((\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})(u \otimes u))
\\&
=n(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})\mathrm{Cov}(u \otimes u)(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})^{\prime}=n(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})(\mathbf{I}_{p^2}+\mathbf{K}_p)(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})^{\prime}
\\&
=n(\mathbf{I}_{p^2}+\mathbf{K}_p)(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})(\mathbf{\Sigma}^{\frac{1}{2}}\otimes\mathbf{\Sigma}^{\frac{1}{2}})=n(\mathbf{I}_{p^2}+\mathbf{K}_p)(\mathbf{\Sigma}\otimes\mathbf{\Sigma}).
\end{aligned}\end{equation}
$$

## 5
>[!note]
>(1)设$\mathbf{W},x_1,\cdots,x_m$相互独立,$\mathbf{W}\sim W_p(n,\mathbf{I}_{p}),x_{i}\sim N_p(0,\mathbf{I}_{p})$,其中$i=1,\cdots,m.n\geqslant p$.试求$\mathbf{W}^{-1/2}\mathbf{X}^{\prime}$的密度函数,其中$\mathbf{X}^{\prime}=(x_1,\cdots,x_m)$;
>(2)设$\mathbf{W}_{1}$和$\mathbf{W}_{2}$相互独立,且$\mathbf{W}_{1}\sim W_p(n,\mathbf{I}_p)$和$\mathbf{W}_{2}\sim W_p(m,\mathbf{I}_p)$,其中$n,m\geqslant p$.试求$\mathbf{W}^{-1/2}_{1}\mathbf{W}_{2}\mathbf{W}^{-1/2}_{1}$的密度函数.

$$
\begin{equation} \begin{aligned}
Sol.&(1)\mathbf{X}^{\prime}\sim N_{p\times m}(0,\mathbf{I}_{p}\otimes \mathbf{I}_{m}),令\mathbf{Y}=\mathbf{W}^{-1/2}\mathbf{X}^{\prime},由\mathbf{X}^{\prime}与\mathbf{W}独立,F(\mathbf{X}^\prime,\mathbf{W})=f(\mathbf{X}^{\prime})g(\mathbf{W}),其中
\\&
f(\mathbf{X}^{\prime})=\frac{1}{(2\pi)^{mp/2}}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{X}\mathbf{X}^{\prime})\right\},g(\mathbf{W})=\frac{\lvert \mathbf{W}\rvert^{(n-p-1)/2}}{2^{np/2}\Gamma_{p}(\frac{n}{2})}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{W})\right\}.
\\&
则F(\mathbf{X}^\prime,\mathbf{W})=\frac{\lvert \mathbf{W}\rvert^{(n-p-1)/2}}{(2\pi)^{mp/2}2^{np/2}\Gamma_{p}(\frac{n}{2})}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{W}+\mathbf{X}\mathbf{X}^{\prime})\right\}.
\\&
作变换\mathbf{Y}=\mathbf{W}^{-1/2}\mathbf{X}^\prime,则\mathbf{J}(\mathbf{X}^{\prime}\rightarrow \mathbf{Y})=\lvert\mathbf{W}\rvert^{\frac{m}{2}},
\\&
G(\mathbf{Y},\mathbf{W})=F(\mathbf{X}^\prime,\mathbf{W})\mathbf{J}(\mathbf{X}^{\prime},\mathbf{W}\rightarrow \mathbf{Y},\mathbf{W})=F(\mathbf{X}^\prime,\mathbf{W})\mathbf{J}(\mathbf{X}^{\prime}\rightarrow \mathbf{Y})
\\&
=\frac{\lvert \mathbf{W}\rvert^{(m+n-p-1)/2}}{\pi^{mp/2}2^{(m+n)p/2}\Gamma_{p}(\frac{n}{2})}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{W}(\mathbf{I}_{p}+\mathbf{Y}^{\prime}\mathbf{Y}))\right\},
\\&
h(\mathbf{Y})=\int\limits_{\mathbf{W}>0}G(\mathbf{Y},\mathbf{W})\mathrm{d}\mathbf{W}=\frac{1}{\pi^{mp/2}2^{(m+n)p/2}\Gamma_{p}(\frac{n}{2})}\int\limits_{\mathbf{W}>0}\lvert \mathbf{W}\rvert^{\frac{m+n-p-1}{2}}\mathrm{etr}\left\{-\mathbf{W}\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\right\}\mathrm{d}\mathbf{W}
\\&
(注:\mathrm{etr(\mathbf{A})}=\mathrm{exp\{tr(\mathbf{A})\}},多元\Gamma函数定义为\Gamma_{p}(\alpha)=\int\limits_{\mathbf{A}>0}\lvert \mathbf{A}\rvert^{\alpha-\frac{p+1}{2}}\mathrm{etr}(-\mathbf{A})\mathrm{d}\mathbf{A},
\\&
令\mathbf{A}=\left(\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\right)^{\prime\frac{1}{2}}\mathbf{W}\left(\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\right)^{\frac{1}{2}},则\mathbf{J}(\mathbf{W}\rightarrow \mathbf{A})=\lvert\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\rvert^{-\frac{p+1}{2}})
\\&
=\frac{1}{\pi^{\frac{mp}{2}}2^{\frac{(m+n)p}{2}}\Gamma_{p}(\frac{n}{2})}\lvert\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\rvert^{-\frac{m+n-p-1}{2}}\cdot\lvert\frac{\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}}{2}\rvert^{-\frac{p+1}{2}}\int\limits_{\mathbf{A}>0}\lvert\mathbf{A}\rvert^{\frac{m+n}{2}-\frac{p+1}{2}}\mathrm{etr}(-\mathbf{A})\mathrm{d}\mathbf{A}
\\&
=\frac{\Gamma_{p}(\frac{m+n}{2})}{\pi^{\frac{mp}{2}}\Gamma_{p}(\frac{n}{2})}\cdot\lvert\mathbf{I}_p+\mathbf{Y}\mathbf{Y}^{\prime}\rvert^{-\frac{m+n}{2}}.This\ is\ a\ Matrix\ t-distribution.
\\&
(2)H(\mathbf{W}_{1},\mathbf{W}_2)=g(\mathbf{W}_{1})g(\mathbf{W}_{2})=\frac{\lvert \mathbf{W}_{1}\rvert^{(n-p-1)/2}\lvert \mathbf{W}_{2}\rvert^{(m-p-1)/2}}{2^{(m+n)p/2}\Gamma_{p}(\frac{n}{2})\Gamma_{p}(\frac{m}{2})}\mathrm{etr}\left\{-\frac{1}{2}(\mathbf{W}_{1}+\mathbf{W}_{2})\right\},
\\&
作变换\mathbf{Z}=\mathbf{W}^{-1/2}_{1}\mathbf{W}_{2}\mathbf{W}^{-1/2}_{1},则\mathbf{J}(\mathbf{W}_{2}\rightarrow\mathbf{Z})=\lvert\mathbf{W}_{1}\rvert^{p+1/2},
\\&
\mathbf{Q}(\mathbf{W}_{1},\mathbf{Z})=\frac{\lvert \mathbf{W}_{1}\rvert^{(n-p-1)/2}\cdot\lvert \mathbf{W}^{1/2}_{1}\mathbf{Z}\mathbf{W}^{1/2}_{1}\rvert^{(m-p-1)/2}}{2^{(m+n)p/2}\Gamma_{p}(\frac{n}{2})\Gamma_{p}(\frac{m}{2})}\mathrm{etr}\left\{-\frac{1}{2}(\mathbf{W}_{1}+\mathbf{W}^{1/2}_{1}\mathbf{Z}\mathbf{W}^{1/2}_{1})\right\}\lvert\mathbf{W}_{1}\rvert^{p+1/2}
\\&
=\frac{\lvert \mathbf{W}_{1}\rvert^{(m+n-p-1)/2}\cdot\lvert \mathbf{Z}\rvert^{(m-p-1)/2}}{2^{(m+n)p/2}\Gamma_{p}(\frac{n}{2})\Gamma_{p}(\frac{m}{2})}\mathrm{etr}\left\{-\mathbf{W}_{1}\frac{(\mathbf{I}_{p}+\mathbf{Z})}{2}\right\},
\\&
故q(\mathbf{Z})=\int\limits_{W_{1}>0}\mathbf{Q}(\mathbf{W}_{1},\mathbf{Z})\mathrm{d}\mathbf{W}_{1}=\frac{\Gamma_{p}(\frac{m+n}{2})}{\Gamma_{p}(\frac{n}{2})\Gamma_{p}(\frac{m}{2})}\cdot\frac{\lvert \mathbf{Z}\rvert^{(m-p-1)/2}}{\lvert\mathbf{I}_{p}+\mathbf{Z}\rvert^{\frac{m+n}{2}}}(积分形式同(1)). 
\\&
This\ is\ a\ Matrix\ F-distribution.
\end{aligned}\end{equation}
$$

## 6
>[!note] 
>设$\mathbf{W}\sim W_{p}(n,\mathbf{I}_{p}),\mathbf{W}=(w_{ij}),r_{ij}=w_{ij}/\sqrt{w_{ii}w_{jj}},\mathbf{R}=(r_{ij})_{p\times p}$.
>(1)试证明:$w_{11},\cdots,w_{pp},\mathbf{R}$相互独立;
>(2)试证明:$w_{11},\cdots,w_{pp}$相互独立同$\chi^{2}_{n}$分布;
>(3)试求$\mathbf{R}$的分布.

$$
\begin{equation} \begin{aligned}
Proof.&已知f(\mathbf{W})=\frac{1}{2^{np/2}\Gamma_{p}(n/2)}\lvert \mathbf{W} \rvert^{\frac{n-p-1}{2}}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{W})\right\},
令\mathbf{W}的对角元u=(w_{11},\cdots,w_{pp})^{\prime},
\\&
\mathbf{W}的上三角元排列为
w=(w_{12},\cdots,w_{1p},w_{23},\cdots,w_{2p},\cdots,w_{p-1,p})^{\prime},\mathbf{U}=\mathrm{diag}(w_{11},\cdots,w_{pp}).
\\&
则g(\mathbf{R},\mathbf{D})=f(\mathbf{D}^{\frac{1}{2}}\mathbf{R}\mathbf{D}^{\frac{1}{2}})\cdot \mathbf{J}(\mathbf{W\rightarrow R,D}),其中
\\&
\mathbf{J}(\mathbf{W\rightarrow R,D})=\mathbf{J}(\mathbf{W,D\rightarrow R,D})
=\mathbf{J}(w,u\rightarrow r,u)=\frac{\partial(w,u)^{\prime}}{\partial(r^{\prime},u^{\prime})^{\prime}}=\begin{vmatrix} \frac{\partial w^{\prime}}{\partial r} &\frac{\partial u^{\prime}}{\partial r}\\\frac{\partial w}{\partial u}&\frac{\partial u}{\partial u}\end{vmatrix}
\\&
=\begin{vmatrix} \frac{\partial w^{\prime}}{\partial r}&0\\0&\mathbf{I}_{p} \end{vmatrix},注意其中w_{ij}=\sqrt{w_{ii}w_{jj}}r_{ij},当i<j,
\\&
则\lvert\mathbf{J}(\mathbf{W\rightarrow R,D})\rvert=\textstyle\prod\limits_{i<j}\sqrt{w_{ii}w_{jj}}=\textstyle\prod\limits^{p}_{i=1}w^{\frac{p-1}{2}}_{ii}=\lvert\mathbf{D}\rvert^{\frac{p-1}{2}},从而
\\&
g(\mathbf{R},\mathbf{D})=\frac{1}{2^{np/2}\Gamma_{p}(n/2)}\lvert \mathbf{D}^{\frac{1}{2}}\mathbf{R}\mathbf{D}^{\frac{1}{2}} \rvert^{\frac{n-p-1}{2}}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr}(\mathbf{D}^{\frac{1}{2}}\mathbf{R}\mathbf{D}^{\frac{1}{2}})\right\}\cdot\lvert{\mathbf{D}}\rvert^{\frac{p-1}{2}}
\\&
=\frac{1}{2^{np/2}\Gamma_{p}(n/2)}\lvert{\mathbf{D}}\rvert^{\frac{n}{2}-1}\lvert\mathbf{R}\rvert^{\frac{n-p-1}{2}}\mathrm{exp}\left\{-\frac{1}{2}\mathrm{tr(\mathbf{D})}\right\}(注意r_{ii}=1,i=1,\cdots,p)
\\&
=\frac{1}{2^{np/2}\Gamma_{p}(n/2)}\lvert\mathbf{R}\rvert^{\frac{n-p-1}{2}}\prod^{p}_{i=1}w^{n/2-1}_{ii}\mathrm{exp}\left\{-\frac{1}{2}\sum\limits^{p}_{i=1}w_{ii}\right\}
\\&
=\frac{(\Gamma(\frac{n}{2}))^{p}}{\Gamma_{p}(n/2)}\lvert \mathbf{R} \rvert^\frac{n-p-1}{2}\cdot\prod^{p}_{i=1}\left(\frac{w^{n/2-1}_{ii}}{2^{n/2}}\mathrm{exp}\left\{-\frac{1}{2}w_{ii}\right\}\right)
\\
&(1)(2)(3)由联合分布函数可知,w_{11},\cdots,w_{pp},\mathbf{R}相互独立，
\\&
且w_{ii}\sim\frac{w^{n/2-1}_{ii}}{2^{n/2}}\mathrm{exp}\left\{-\frac{1}{2}w_{ii}\right\}\sim\chi^{2}_{n},i=1,\cdots,p,\mathbf{R}\sim\frac{(\Gamma(\frac{n}{2}))^{p}}{\Gamma_{p}(n/2)}\lvert \mathbf{R} \rvert^\frac{n-p-1}{2}.
\end{aligned}\end{equation}
$$

## 10
>[!note] 
>设$\mathbf{W}_i$相互独立,且$\mathbf{W}_{i}\sim W_p(n_{i},\mathbf{I}_{p})$,其中$n_i\geqslant p,i=0,1,\cdots,k.$
>(1)令$\mathbf{M}_{j}=\left(\displaystyle\sum\limits^{k}_{i=1}\mathbf{W}_i\right)^{-1/2}\mathbf{W}_{j}\left(\displaystyle\sum\limits^k_{i=1}\mathbf{W}_i\right)^{-1/2},j=1,\cdots,k.$试求$(\mathbf{M}_1,\cdots,\mathbf{M}_k)$的联合密度函数；
>(2)令$\mathbf{V}_{j}=\mathbf{W}^{-1/2}_{0}\mathbf{W}_{j}\mathbf{W}^{-1/2}_{0},j=1,\cdots,k.$试求$(\mathbf{V}_{1},\cdots,\mathbf{V}_{k})$的联合密度函数.

$$
\begin{equation} \begin{aligned}
Sol.(1)&由独立性,f(\mathbf{W}_{1},\cdots,\mathbf{W}_{k})=\frac{\prod\limits^{k}_{i=1}\lvert\mathbf{W}_{i}\rvert^{(n_{i}-p-1)/2}}{2^{\frac{p}{2}\sum\limits^{k}_{i=1}n_{i}}\cdot\prod\limits^{k}_{i=1}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}\sum\limits^{k}_{i=1}\mathbf{W}_i\right\},
\\&
作变换,\mathbf{W}=\sum\limits^{k}_{i=1}\mathbf{W}_{i},\mathbf{W}_{i}=\mathbf{W}^{\frac{1}{2}}\mathbf{M}_{i}\mathbf{W}^{\frac{1}{2}},i=1,\cdots,k-1.
\\&
\mathbf{J}(\mathbf{W}_{1},\cdots,\mathbf{W}_{k}\rightarrow\mathbf{M}_{1},\cdots,\mathbf{M}_{k-1},\mathbf{W})=\lvert\mathbf{W}\rvert^{(p+1)(k-1)/2}
\\&
g(\mathbf{M}_{1},\cdots,\mathbf{M}_{k-1},\mathbf{W})=f(\mathbf{W}_{1},\cdots,\mathbf{W}_{k})\mathbf{J}(\mathbf{W}_{1},\cdots,\mathbf{W}_{k}\rightarrow\mathbf{M}_{1},\cdots,\mathbf{M}_{k-1},\mathbf{W})
\\&
=\frac{\prod\limits^{k-1}_{i=1}\lvert\mathbf{W}^{\frac{1}{2}}\mathbf{M}_{i}\mathbf{W}^{\frac{1}{2}}\rvert^{(n_{i}-p-1)/2}\cdot\lvert \mathbf{W}-\sum\limits^{k-1}_{i=1}\mathbf{W}_{i}\rvert^{\frac{n_{k}-p-1}{2}}\cdot\lvert\mathbf{W}\rvert^{\frac{(p+1)(k-1)}{2}}}{2^{\frac{p}{2}\sum\limits^{k}_{i=1}n_{i}}\cdot\prod\limits^{k}_{i=1}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}\mathbf{W}\right\}
\\&
=\frac{\prod\limits^{k-1}_{i=1}\lvert\mathbf{M}_{i}\rvert^{(n_{i}-p-1)/2}\lvert \mathbf{I}_{p}-\sum\limits^{k-1}_{i=1}\mathbf{M}_{i}\rvert^{(n_{k}-p-1)/2}\lvert\mathbf{W}\rvert^{\frac{\sum^{k}_{i=1}n_{i}-(p+1)}{2}}}{2^{\frac{p}{2}\sum\limits^{k}_{i=1}n_{i}}\cdot\prod\limits^{k}_{i=1}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}\mathbf{W}\right\}
\\&
h(\mathbf{M}_{1},\cdots,\mathbf{M}_{k-1})=\int\limits_{\mathbf{W}>0}g(\mathbf{M}_{1},\cdots,\mathbf{M}_{k-1},\mathbf{W})\mathrm{d}\mathbf{W}
\\&
=\frac{\prod\limits^{k-1}_{i=1}\lvert\mathbf{M}_{i}\rvert^{(n_{i}-p-1)/2}\lvert \mathbf{I}_{p}-\sum\limits^{k-1}_{i=1}\mathbf{M}_{i}\rvert^{(n_{k}-p-1)/2}\Gamma_{p}(\sum\limits^{k}_{i=1}\frac{n_{i}}{{2}})}{\prod\limits^{k}_{i=1}\Gamma_{p}(\frac{n_{i}}{{2}})}(注意\sum\limits^{k}_{i=1}\mathbf{M}_{i}=\mathbf{I}_{p})
\\&
从而l(\mathbf{M}_{1},\cdots,\mathbf{M}_{k})=\frac{\prod\limits^{k}_{i=1}\lvert\mathbf{M}_{i}\rvert^{(n_{i}-p-1)/2}\Gamma_{p}(\sum\limits^{k}_{i=1}\frac{n_{i}}{{2}})}{\prod\limits^{k}_{i=1}\Gamma_{p}(\frac{n_{i}}{{2}})}.This\ is\ a\ Dirichlet\ type\ \mathbf{I}\ distribution.
\\
(2)&F(\mathbf{W}_{0},\cdots,\mathbf{W}_{k})=\frac{\prod\limits^{k}_{i=0}\lvert\mathbf{W}_{i}\rvert^{(n_{i}-p-1)/2}}{2^{\frac{p}{2}\sum\limits^{k}_{i=0}n_{i}}\cdot\prod\limits^{k}_{i=0}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}\sum\limits^{k}_{i=0}\mathbf{W}_i\right\}
\\&
作变换\mathbf{W}_{j}=\mathbf{W}^{\frac{1}{2}}_{0}\mathbf{V}_{j}\mathbf{W}^{\frac{1}{2}}_{0},则\mathbf{J}(\mathbf{W}_{0},\cdots,\mathbf{W}_{k}\rightarrow\mathbf{W}_{0},\mathbf{V}_{1},\cdots,\mathbf{V}_{k})=\lvert\mathbf{W}_{0}\rvert^{\frac{k(p+1)}{2}}.
\\&
G(\mathbf{W}_{0},\mathbf{V}_{1},\cdots,\mathbf{V}_{k})=\frac{\prod\limits^{k}_{i=0}\lvert\mathbf{W}^{\frac{1}{2}}_{0}\mathbf{V}_{j}\mathbf{W}^{\frac{1}{2}}_{0}\rvert^{\frac{n_{i}-p-1}{2}}\lvert\mathbf{W}_{0}\rvert^{\frac{k(p+1)}{2}}}{2^{\frac{p}{2}\sum\limits^{k}_{i=0}n_{i}}\cdot\prod\limits^{k}_{i=0}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}\left(\sum\limits^{k}_{i=1}\mathbf{W}^{\frac{1}{2}}_{0}\mathbf{V}_{i}\mathbf{W}^{\frac{1}{2}}_{0}+\mathbf{W}_{0}\right)\right\}
\\&
=\frac{\prod\limits^{k}_{i=0}\lvert\mathbf{V}_{j}\rvert^{(n_{i}-p-1)/2}\lvert\mathbf{W}_0\rvert^{\frac{\sum^{k}_{i=0}n_{i}-(p+1)(k+1)}{2}}}{2^{\frac{p}{2}\sum\limits^{k}_{i=0}n_{i}}\cdot\prod\limits^{k}_{i=0}\Gamma_{p}(\frac{n_{i}}{{2}})}\mathrm{etr}\left\{-\frac{1}{2}(\mathbf{I}_{p}+\sum\limits^{k}_{i=0}\mathbf{V}_{i})\mathbf{W}_{0}\right\}
\\&
H(\mathbf{V}_{1},\cdots,\mathbf{V}_{k})=\int\limits_{\mathbf{W}_{0}>0}G(\mathbf{W}_{0},\mathbf{V}_{1},\cdots,\mathbf{V}_{k})\mathrm{d}\mathbf{W}(法同5(1))
\\&
=\frac{\prod\limits^{k}_{i=1}\lvert\mathbf{V}_{i}\rvert^{\frac{n_{i}-p-1}{2}}\Gamma_p\left(\sum\limits^{k}_{i=0}n_{i}\right)}{\prod\limits^{k}_{i=0}\Gamma_{p}(\frac{n_{i}}{{2}})}\lvert\mathbf{I}_{p}+\sum\limits^{k}_{i=1}\mathbf{V}_{i}\rvert^{-\frac{\sum^{k}_{i=0}n_{i}}{2}}
This\ is\ a\ Dirichlet\ type\ \mathbf{II}\ distribution.
\end{aligned}\end{equation}
$$

## 11
>[!note] 
>设$\mathbf{W}_{1}$和$\mathbf{W}_2$相互独立,且$\mathbf{W}_{1}\sim W_{p}(n,\mathbf{\Sigma})$和$\mathbf{W}_{2}\sim W_{p}(m,\mathbf{\Sigma})$,其中$\mathbf{\Sigma}>0,n\geqslant p$和$m\geqslant p$.
>(1)试证明:$\mathbf{W}_{1}+\mathbf{W}_{2}$与$(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}\mathbf{W}_{1}(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}$相互独立;
>(2)试由$(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}\mathbf{W}_{1}(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}$的密度函数,计算$\Lambda(p,n,m)$的矩;
>(3)令$\mathbf{W}_{1}+\mathbf{W}_{2}=\mathbf{U}\mathbf{U}^{\prime}$,其中$\mathbf{U}$为对角线元素为正的下三角矩阵.试证明$\mathbf{W}_{1}+\mathbf{W}_{2}$与$\mathbf{U}^{-1}\mathbf{W}_{1}\mathbf{U}^{-1}$相互独立.
>(4)试证明:$\mathbf{W}_{1}+\mathbf{W}_{2}$与$\mathbf{C}\mathbf{W}_{1}\mathbf{C}^{\prime}$相互独立,其中$\mathbf{C}$满足条件$\mathbf{C}(\mathbf{W}_{1}+\mathbf{W}_{2})\mathbf{C}^{\prime}=\mathbf{I}_{p}$.

$$
\begin{equation} \begin{aligned}
(1)&Proof.令\mathbf{T}=(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}\mathbf{W}_{1}(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2},\mathbf{W}=\mathbf{W}_{1}+\mathbf{W}_{2}.
\\&
f(\mathbf{W}_{1},\mathbf{W}_{2})=\frac{\lvert\mathbf{W}_{1}\rvert^{\frac{n-p-1}{2}}\lvert\mathbf{W}_{2}\rvert^{\frac{m-p-1}{2}}}{2^{\frac{(m+n)p}{2}}\lvert\Sigma\rvert^{\frac{m+n}{2}}\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\mathrm{etr}\left\{-\frac{1}{2}\Sigma^{-1}(\mathbf{W}_{1}+\mathbf{W}_{2})\right\},
\\&
有\mathbf{J}(\mathbf{W}_{1},\mathbf{W}_{2}\rightarrow\mathbf{W},\mathbf{W}_{2})=1
\\&
则g(\mathbf{W}_{1},\mathbf{W})=\frac{\lvert\mathbf{W}_{1}\rvert^{\frac{n-p-1}{2}}\lvert\mathbf{W}-\mathbf{W}_{1}\rvert^{\frac{m-p-1}{2}}}{2^{\frac{(m+n)p}{2}}\lvert\Sigma\rvert^{\frac{m+n}{2}}\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\mathrm{etr}\left\{-\frac{1}{2}\Sigma^{-1}\mathbf{W}\right\},
\\&
记\mathbf{W}=\mathbf{P}^{\prime}\mathbf{P}且满足\mathbf{W}_{1}=\mathbf{P}^{\prime}\mathbf{T}\mathbf{P},
\\&
有\mathrm{d}\mathbf{W}_{1}\wedge\mathrm{d}\mathbf{W}=(\mathrm{d}\mathbf{P}^{\prime}\cdot\mathbf{T}\mathbf{P}+\mathbf{P}^{\prime}\mathrm{d}\mathbf{T}\cdot\mathbf{P}+\mathbf{P}^{\prime}\mathbf{T}\cdot\mathrm{d}\mathbf{P})\wedge\mathrm{d}(\mathbf{P}^{\prime}\mathbf{P})=(\mathbf{P}^{\prime}\mathrm{d}\mathbf{T}\cdot\mathbf{P})\wedge\mathrm{d}(\mathbf{P}^{\prime}\mathbf{P})
\\&
=\lvert\mathbf{P}\rvert^{p+1}\mathrm{d}\mathbf{T}\wedge\mathrm{d}(\mathbf{P}^{\prime}\mathbf{P})=\lvert\mathbf{P}^{\prime}\mathbf{P}\rvert^{\frac{p+1}{2}}\mathrm{d}\mathbf{T}\wedge\mathrm{d}(\mathbf{P}^{\prime}\mathbf{P})则\mathbf{J}(\mathbf{A},\mathbf{C}\rightarrow\mathbf{T},\mathbf{P}^{\prime}\mathbf{P})=\lvert\mathbf{P}^{\prime}\mathbf{P}\rvert^{\frac{p+1}{2}}.
\\&
h(\mathbf{T},\mathbf{P}^{\prime}\mathbf{P})=\frac{\lvert\mathbf{P}^{\prime}\mathbf{T}\mathbf{P}\rvert^{\frac{n-p-1}{2}}\lvert\mathbf{P}^{\prime}\mathbf{P}-\mathbf{P}^{\prime}\mathbf{T}\mathbf{P}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{P}^{\prime}\mathbf{P}\rvert^{\frac{p+1}{2}}}{2^{\frac{(m+n)p}{2}}\lvert\Sigma\rvert^{\frac{m+n}{2}}\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\mathrm{etr}\left\{-\frac{1}{2}\Sigma^{-1}\mathbf{P}^{\prime}\mathbf{P}\right\}
\\&
=\frac{\lvert\mathbf{P}^{\prime}\mathbf{P}\rvert^{\frac{m+n-p-1}{2}}\lvert\mathbf{I}_{p}-\mathbf{T}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{T}\rvert^{\frac{n-p-1}{2}}}{2^{\frac{(m+n)p}{2}}\lvert\Sigma\rvert^{\frac{m+n}{2}}\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\mathrm{etr}\left\{-\frac{1}{2}\Sigma^{-1}\mathbf{P}^{\prime}\mathbf{P}\right\}
\\&
=\frac{\lvert\mathbf{P}^{\prime}\mathbf{P}\rvert^{\frac{m+n-p-1}{2}}}{2^{\frac{(m+n)p}{2}}\lvert\Sigma\rvert^{\frac{m+n}{2}}\Gamma_{p}(\frac{m+n}{2})}\mathrm{etr}\left\{-\frac{1}{2}\Sigma^{-1}\mathbf{P}^{\prime}\mathbf{P}\right\}\cdot\frac{\Gamma_{p}(\frac{m+n}{2})}{\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\lvert\mathbf{I}_{p}-\mathbf{T}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{T}\rvert^{\frac{n-p-1}{2}}
\\&
由联合分布函数可以看出,\mathbf{W}_{1}+\mathbf{W}_{2}与(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}\mathbf{W}_{1}(\mathbf{W}_{1}+\mathbf{W}_{2})^{-1/2}相互独立
\\
(2)&Sol.\mathbf{T}=(\mathbf{W}_{1}+\mathbf{W}_{2})^{-\frac{1}{2}}\mathbf{W}_{1}(\mathbf{W}_{1}+\mathbf{W}_{2})^{-\frac{1}{2}}\sim\frac{\Gamma_{p}(\frac{m+n}{2})}{\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\lvert\mathbf{I}_{p}-\mathbf{T}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{T}\rvert^{\frac{n-p-1}{2}}\sim BE_{p}(n,m).
\\&
E(\Lambda^{k})=E(\lvert\mathbf{T}\rvert^{k})=\int\limits_{T>0}\frac{\Gamma_{p}(\frac{m+n}{2})}{\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2})}\lvert\mathbf{I}_{p}-\mathbf{T}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{T}\rvert^{\frac{n-p-1}{2}}\lvert\mathbf{T}\rvert^{k}\mathrm{d}\mathbf{T}
\\&
=\frac{\Gamma_{p}(\frac{m+n}{2})\Gamma_{p}(\frac{n}{2}+k)}{\Gamma_{p}(\frac{m+n}{2}+k)\Gamma_{p}(\frac{n}{2})}\int\limits_{T>0}\frac{\Gamma_{p}(\frac{m+n}{2}+k)}{\Gamma_{p}(\frac{m}{2})\Gamma_{p}(\frac{n}{2}+k)}\lvert\mathbf{I}_{p}-\mathbf{T}\rvert^{\frac{m-p-1}{2}}\lvert\mathbf{T}\rvert^{\frac{n-p-1}{2}+k}\mathrm{d}\mathbf{T}
\\&
=\frac{\Gamma_{p}(\frac{m+n}{2})\Gamma_{p}(\frac{n}{2}+k)}{\Gamma_{p}(\frac{m+n}{2}+k)\Gamma_{p}(\frac{n}{2})}.
\\&
当k=1时，E(\Lambda)=\frac{\Gamma_{p}(\frac{m+n}{2})\Gamma_{p}(\frac{n}{2}+1)}{\Gamma_{p}(\frac{m+n}{2}+1)\Gamma_{p}(\frac{n}{2})}=\frac{\Gamma(\frac{m+n+1-p}{2})\Gamma(\frac{n+1}{2})}{\Gamma(\frac{m+n+1}{2})\Gamma(\frac{n+1-p}{2})}.
\\
((3&)(4))少条件?下列证明在满足\mathbf{W}_{1}=\mathbf{U}^{\prime}\mathbf{T}\mathbf{U}或\mathbf{W}_{1}=\mathbf{C}^{\prime}\mathbf{T}\mathbf{C}时进行.)
\\
(3)&Proof.令(1)中\mathbf{P}=\mathbf{U}即可,由\mathrm{Bartlett}分解可知这样的\mathbf{U}存在.
\\
(4)&Proof.令(1)中\mathbf{P}^{-1}=\mathbf{C}即可.
\end{aligned}\end{equation}
$$