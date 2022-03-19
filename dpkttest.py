import dpkt
import socket
import time
id = 1
def split_body(contentStr):
    if(contentStr.find('\r\n\r\n')!= -1):
        header_body = contentStr.strip().split('\r\n\r\n')
        print("This is a body-exist packet")
        print('header:'+'\n'+header_body[0]+'\n')
        print('body:'+'\n'+header_body[1])

    else:
        print("This is a body-noexist packet"+'\n')
        print(contentStr)

def conStrHandle(contentStr):
    global id
    # print(str(id)+'\n')
    # print(contentStr)
    split_body(contentStr)


file = 'savetest.pcap'
                #read,binary
with open(file, 'rb') as fr:
    pcap = dpkt.pcap.Reader(fr)
    for timestamp, buffer in pcap:
        time_local = time.localtime(timestamp)
        dt = time.strftime("%Y-%m-%d %H:%M:%S",time_local)
        # print("----------"+"\n")
        # print("num:"+str(num)+"\n")
        # print(dt+"\n")
        # print("buffer:"+str(buffer)+"\n")

        ethernet = dpkt.ethernet.Ethernet(buffer)
        # 仅需要TCP的包
        if not isinstance(ethernet.data, dpkt.ip.IP):
            continue
        ip = ethernet.data
        if not isinstance(ip.data, dpkt.tcp.TCP):
            continue
        tcp = ip.data
        # 过滤内容为空的包
        if len(tcp.data) == 0:
            continue
        # 发送方的IP
        srcip = socket.inet_ntoa(ip.src)
        # print("src ip is"+src)
        # 接收方的IP
        dstip = socket.inet_ntoa(ip.dst)
        # print("dst ip is"+dst)
        # 报文内容（byte数组）
        contentByte = tcp.data
        contentStr = (str(contentByte,'utf-8'))
        # print(contentStr)
        conStrHandle(contentStr)
        # if tcp.dport == 80 and len(tcp.data)>0:
        #         http = dpkt.http.Request(tcp.data)
                # print(http.uri)
                # print(type(http.uri))
        print("==========done=========\n")

        