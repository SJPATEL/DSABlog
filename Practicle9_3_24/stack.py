class Stack:
    def __init__(self):
        self.s=[]
    def is_empty(self):
        return self.s==[]
    def list_element(self):
        print("\ncurrent stack is:")
        print(self.s)
    def push(self,n):
        self.s.append(n)
        print(self.s)
    def pop(self):
        return(self.s.pop())
    def merge_stack(self,sn):
        self.s.extend(sn)
        print("stack merged in old stack")
   
Obj=Stack()
while True:
    print("\n\nPress 1. for Push Operation:")
    print("Press 2. for Pop Operation:")
    print("Press 3. for Merge two Stack:")
    print("Press 4. for List Element:")
    print("Press 5. for Exit:\n")
	
    ch=int(input("\nEnter Your choice::"))
    if ch==1:
        v=int(input("\nEnter element:"))
        Obj.push(v) 
    elif ch==2:
        if Obj.is_empty():
            print('\nStack is empty.')
        else:
            print('\nPopped value: ', Obj.pop())
    elif ch==3:
        print("\nnew stack is : [3,4,8]")
        news=[3,4,8]
        Obj.merge_stack(news)
    elif ch==4:
        Obj.list_element()
    elif ch==5:
        break